<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\File;
use App\Models\Tender;
use Validator;
use Auth;
use Redirect;


class TenderController extends Controller
{
  /**
   * create a new instance of the class
   *
   * @return void
   */
  function __construct()
  {
    $this->middleware('permission:manage-tender,admin', ['only' => ['index','store','create', 'edit','update', 'destroy']]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $this->data['page_title'] = 'Admin | Tender';
    $this->data['list'] = tender::orderBy('id', 'desc')->where('is_deleted', '0')->paginate(10);
    return view('admin.tender.index', $this->data);
  }

  public function create()
  {
    $this->data['page_title'] = 'Admin | Tender';
    return view('admin.tender.create', $this->data);
  }

  public function store(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'tender_no'                => 'required|string|max:200',
        'tender_subject'           => 'required|string|max:200',
        'tender_type'              => 'required',
        'tender_date'              => 'required',
        'last_date_of_application' => 'required',
        'tender_notice'            => 'required|mimes:pdf|max:10000',
        'related_notification'     => "required|mimes:pdf|max:10000",
        'status'            => 'nullable'
      ],
      [
        'required' => 'The :attribute field is required',
        'tender_no.max' => 'tender no can be maximum :max chars long',
        'tender_subject.max' => 'tender subject can be maximum :max chars long',
      ]
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $tender_no = $request->tender_no;
      $tender_subject = $request->tender_subject;
      $tender_type = $request->tender_type;
      $tender_date = $request->tender_date;
      $last_date_of_application = $request->last_date_of_application;

      if ($request->hasFile('tender_notice')) :
        $notice = $request->file('tender_notice');
        $filename = time() . '.' . $notice->getClientOriginalExtension();
        $notice->move(public_path() . '/uploads/tender', $filename);

      endif;
      if (!empty($filename)) {
        $notice = $filename;
      } else {
        $notice = "";
      }

      if ($request->hasFile('related_notification')) :
        $related_notification = $request->file('related_notification');
        $relatedfilename = time() . '_related_notification.' . $related_notification->getClientOriginalExtension();
        $related_notification->move(public_path() . '/uploads/tender', $relatedfilename);

      endif;
      if (!empty($relatedfilename)) {
        $related_notification = $relatedfilename;
      } else {
        $related_notification = "";
      }
      $status = $request->status == true ? '1' : '0';
      $created_by = Auth::guard('admin')->user()->id;

      $tender = Tender::create([
        'tender_no' => $tender_no,
        'tender_subject' => $tender_subject,
        'tender_type'=>$tender_type,
        'tender_date' => $tender_date,
        'last_date_of_application' => $last_date_of_application,
        'tender_notice' => $notice,
        'related_notification' => $related_notification,
        'status' => $status,
        'created_by' => $created_by
      ]);
      if ($tender != null) {
        $successMsg = 'Tender Added Successfully';
        return Redirect('admin/tender')
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
    $this->data['page_title'] = 'Admin | Edit Tender';
    $tender = Tender::find($id);
    $this->data['tender'] = $tender;
    return view('admin.tender.edit', $this->data);
  }

  public function update(Request $request, $id)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'tender_no'                => 'required|string|max:200',
        'tender_subject'           => 'required|string|max:200',
        'tender_type'              => 'required',
        'tender_date'              => 'required',
        'last_date_of_application' => 'required',
        'tender_notice'            => 'nullable|mimes:pdf|max:10000',
        'related_notification'     => "nullable|mimes:pdf|max:10000",
        'status'            => 'nullable'
      ],
      [
        'required' => 'The :attribute field is required',
        'tender_no.max' => 'tender no can be maximum :max chars long',
        'tender_subject.max' => 'tender subject can be maximum :max chars long',
      ]
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $tender_no = $request->tender_no;
      $tender_subject = $request->tender_subject;
      $tender_type = $request->tender_type;
      $tender_date = $request->tender_date;
      $last_date_of_application = $request->last_date_of_application;
      $old_tender_notice=$request->old_tender_notice; 
      $old_related_notification=$request->old_related_notification; 
      if ($request->hasFile('tender_notice')) :
        $notice = $request->file('tender_notice');
        $filename = time() . '.' . $notice->getClientOriginalExtension();
        $notice->move(public_path() . '/uploads/tender', $filename);
      endif;
      if (!empty($filename) && File::exists(public_path("uploads/tender/" . $old_tender_notice))) {
        File::delete(public_path("uploads/tender/" . $old_tender_notice));
      }
      if (!empty($filename)) {
        $notice = $filename;
      } else {
        $notice = $old_tender_notice;
      }
      if ($request->hasFile('related_notification')) :
        $related_notification = $request->file('related_notification');
        $relatedfilename = time() . '_related_notification.' . $related_notification->getClientOriginalExtension();
        $related_notification->move(public_path() . '/uploads/tender', $relatedfilename);
      endif;
      if (!empty($relatedfilename) && File::exists(public_path("uploads/tender/" . $old_related_notification))) {
        File::delete(public_path("uploads/tender/" . $old_related_notification));
      }
      if (!empty($filename)) {
        $related_notification = $relatedfilename;
      } else {
        $related_notification = $old_related_notification;
      }

      $status = $request->status == true ? '1' : '0';
      $updated_by = Auth::guard('admin')->user()->id;

      $tender = Tender::where('id', $id)->update([
        'tender_no' => $tender_no,
        'tender_subject' => $tender_subject,
        'tender_type'=>$tender_type,
        'tender_date' => $tender_date,
        'last_date_of_application' => $last_date_of_application,
        'tender_notice' => $notice,
        'related_notification' => $related_notification,
        'status' => $status,
        'created_by' => $updated_by
      ]);
      if ($tender != null) {

        $successMsg = 'Tender Update Successfully';
        return Redirect('admin/tender')
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
    $deletetender = Tender::where('id', $id)->update([
      'is_deleted' =>'1',
      'deleted_by'=>$deleted_by
    ]);                                                
    $successMsg="Tender deleted successfully!";
    return Redirect::back()
    ->withSuccess($successMsg);  
  }  
}
