<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrganisationChart;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;

class OrganisationController extends Controller
{
  function __construct()
  {
    $this->middleware('permission:manage-organisation,admin', ['only' => ['index','create','store','edit','update']]);
  }
  
  public function index()
  {
    $this->data['page_title'] = 'Admin | Organisation Chart';
    $this->data['list'] = OrganisationChart::orderBy('id', 'desc')->where('is_deleted', '0')->paginate(10);
    return view('admin.organisation.index', $this->data);
  }
  public function create()
  {
    $this->data['page_title'] = 'Admin | Organisation Chart';
    return view('admin.organisation.create', $this->data);
  }

  public function store(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'image'             =>  'required|mimes:jpeg,jpg,png',
        'status'            => 'nullable'
      ],
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      if ($request->hasFile('image')) :
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/organisation', $filename);
      endif;
      if (!empty($filename)) {
        $image = $filename;
      } else {
        $image = "";
      }
      $status = $request->status == true ? '1' : '0';
      $created_by = Auth::guard('admin')->user()->id;
      $chart = OrganisationChart::create([
        'image' => $image,
        'status' => $status,
        'created_by' => $created_by,
      ]);
      if ($chart != null) {
        $successMsg = 'Organisation Chart Added Successfully';
        return Redirect('admin/organisation-chart')
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
    $this->data['page_title'] = 'Admin | Edit Organisation chart';
    $this->data['chart'] = OrganisationChart::find($id);
    return view('admin.organisation.edit', $this->data);
  }

  public function update(Request $request, $id)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'image'             =>  'nullable|mimes:jpeg,jpg,png',
        'status'            => 'nullable'
      ],
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {

      $chart_old_image = $request->chart_old_image;
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/organisation', $filename);
      }
      if (!empty($filename) && File::exists(public_path("uploads/organisation/" . $chart_old_image))) {
        File::delete(public_path("uploads/organisation/" . $chart_old_image));
      }

      if (!empty($filename)) {
        $image = $filename;
      } else {
        $image = $chart_old_image;
      }

      $status = $request->status == true ? '1' : '0';
      $updated_by = Auth::guard('admin')->user()->id;

      $chart = OrganisationChart::where('id', $id)->update([
        'image' => $image,
        'status' => $status,
        'created_by' => $updated_by,
      ]);
      if ($chart != null) {

        $successMsg = 'Organisation Chart Update Successfully';
        return Redirect('admin/organisation-chart')
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
    $deletetender = OrganisationChart::where('id', $id)->update([
      'is_deleted' =>'1',
      'deleted_by'=>$deleted_by
    ]);                                                
    $successMsg="Organisation Chart deleted successfully!";
    return Redirect::back()
    ->withSuccess($successMsg);  
  }

}
