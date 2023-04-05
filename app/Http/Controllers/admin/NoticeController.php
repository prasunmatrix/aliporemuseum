<?php

namespace App\Http\Controllers\admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Notice;
use Illuminate\Support\Facades\File;
use Validator;
use Auth;
use Redirect;

class NoticeController extends Controller
{
  /**
   * create a new instance of the class
   *
   * @return void
   */
  function __construct()
  {
    $this->middleware('permission:manage-notice,admin', ['only' => ['index', 'store', 'create', 'edit', 'update', 'destroy']]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $this->data['page_title'] = 'Admin | Notice';
    $this->data['list'] = Notice::orderBy('id', 'desc')->where('is_deleted', '0')->paginate(10);
    return view('admin.notice.index', $this->data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $this->data['page_title'] = 'Admin | Notice';
    return view('admin.notice.create', $this->data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'name'              => 'required|string|max:200',
        'file' => "required|mimes:pdf|max:10000",
        'status'            => 'nullable'
      ],
      [
        'required' => 'The :attribute field is required',
        'name.max' => 'name can be maximum :max chars long',
      ]
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $name = $request->name;

      if ($request->hasFile('file')) :
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/notice', $filename);

      endif;
      if (!empty($filename)) {
        $file = $filename;
      } else {
        $file = "";
      }
      $status = $request->status == true ? '1' : '0';
      $created_by = Auth::guard('admin')->user()->id;

      $notice = Notice::create([
        'name' => $name,
        'file' => $file,
        'status' => $status,
        'created_by' => $created_by
      ]);
      if ($notice != null) {

        $successMsg = 'Notice Added Successfully';
        return Redirect('admin/notice')
          ->withSuccess($successMsg);
      } else {
        $errMsg = array();
        $errMsg['error'] = 'Something went wrong, please try again';
        return Redirect::back()
          ->withErrors($errMsg)
          ->withInput();
      }
    }
  }

  public function edit($id)
  {
    $this->data['page_title'] = 'Admin | Edit Notice';
    $notice = Notice::find($id);
    $this->data['notice'] = $notice;
    return view('admin.notice.edit', $this->data);
  }

  public function update(Request $request, $id)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'name'              => 'required|string|max:200',
        'file'             => 'nullable|mimes:pdf|max:10000',
        'status'            => 'nullable'
      ],
      [
        'required' => 'The :attribute field is required',
        'name.max' => 'name can be maximum :max chars long',
      ]
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $name = $request->name;
      $old_file = $request->old_file;
      if ($request->hasFile('file')) :
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/notice', $filename);
      endif;
      if (!empty($filename) && File::exists(public_path("uploads/notice/" . $old_file))) {
        File::delete(public_path("uploads/notice/" . $old_file));
      }

      if (!empty($filename)) {
        $file = $filename;
      } else {
        $file = $old_file;
      }

      $status = $request->status == true ? '1' : '0';
      $updated_by = Auth::guard('admin')->user()->id;

      $notice = Notice::where('id', $id)->update([
        'name' => $name,
        'file' => $file,
        'status' => $status,
        'created_by' => $updated_by
      ]);
      if ($notice != null) {

        $successMsg = 'Notice Update Successfully';
        return Redirect('admin/notice')
          ->withSuccess($successMsg);
      } else {
        $errMsg = array();
        $errMsg['error'] = 'Something went wrong, please try again';
        return Redirect::back()
          ->withErrors($errMsg)
          ->withInput();
      }
    }
  }

  public function destroy($id)
  {
    $deleted_by = Auth::guard('admin')->user()->id;
    $deleteNotice = Notice::where('id', $id)->update([
      'is_deleted' => '1',
      'deleted_by' => $deleted_by
    ]);
    $successMsg = "Notice deleted successfully!";
    return Redirect::back()
      ->withSuccess($successMsg);
  }
}
