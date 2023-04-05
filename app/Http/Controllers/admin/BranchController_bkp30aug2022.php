<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Branch,District};

use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;
use DB;
use Illuminate\Support\Str;

class BranchController extends Controller
{
  function __construct()
  {
    $this->middleware('permission:manage-branch,admin', ['only' => ['index','store','create', 'edit','update', 'delete']]);
  }
  public function index()
  {
    $this->data['page_title'] = 'Admin | Branch';
    $branchDetails = Branch::join('district', 'district.id', '=', 'branch_details.district')
    ->select('branch_details.*','district.district_name')
    ->where('branch_details.is_deleted','0')->get();
    $this->data['branchDetails']=$branchDetails;
    return view('admin.branch.index', $this->data);
  }
  public function create()
  {
    $this->data['page_title'] = 'Admin | Add Branch';
    $this->data['panel_title'] = 'Admin Add Branch';
    $districtList = District::where('is_deleted','0')->where('status','1')->get();
    //dd($districtList);
    $this->data['districtList']=$districtList;
    return view('admin.branch.create',$this->data);
  }
  public function store(Request $request){
    //dd($request->all());  
    $validator = Validator::make($request->all(), 
    [
      'district'          => 'required',
      'block'             => 'required|unique:branch_details,block|string|max:200',
      'gram_panchayat'    => 'required|string|max:200',
      'bank_name'         => 'required|string|max:200',
      'branch_name'       => 'required|string|max:200',
      'ifsc_code'         => 'required|string|max:200',
      'branch_code'       => 'required|min:3|max:3',
      //'latitude'          => 'required|regex:/^\d*(\.\d{1,2})?$/',
      //'logitude'          => 'required|regex:/^\d*(\.\d{1,2})?$/'
      'latitude'          => 'required|numeric|between:0,99.9999999',
      'logitude'          => 'required|numeric|between:0,99.9999999',
    ],
    [      
      'required' => 'The :attribute field is required',
      'district.max' => 'district can be maximum :max chars long',
      'block.max' => 'block can be maximum :max chars long',
      'gram_panchayat.max' => 'gram panchayat can be maximum :max chars long',
      'bank_name.max' => 'bank name can be maximum :max chars long',
      'ifsc_code.max' => 'ifsc code can be maximum :max chars long',
      //'branch_code.min' => 'branch code has to be :min chars long',
      //'branch_code.max' => 'branch code has to be :max chars long',

    ]);
    if ($validator->fails()) {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    } else {
          $district= $request->district;
          $block= Str::lower($request->block);        
          $gram_panchayat = $request->gram_panchayat;
          $bank_name = $request->bank_name;
          $branch_name = $request->branch_name;
          $ifsc_code = $request->ifsc_code;
          $branch_code = $request->branch_code;
          $latitude = $request->latitude;
          $logitude = $request->logitude;
          $navbar_status = $request->navbar_status == true ? '1' : '0';
          //dd($navbar_status);
          $status = $request->status == true ? '1' : '0';
          $created_by = Auth::guard('admin')->user()->id;

      $branch = Branch::create([
        'district'=>$district,
        'block'=>$block,
        'gram_panchayat'=>$gram_panchayat,
        'name_of_the_bank'=>$bank_name,
        'name_of_the_branch'=>$branch_name,
        'ifsc_code'=>$ifsc_code,
        'branch_code'=>$branch_code,
        'latitude'=>$latitude,
        'longitude'=>$logitude,
        'status'=>$status,
        'created_by'=>$created_by 
      ]);
      if ($branch != null) {
          
          $successMsg = 'Branch Added Successfully';
          return Redirect('admin/branch')
                  ->withSuccess($successMsg);
          
      } else {
          $errMsg = array();
          $errMsg['registrationerror'] = 'Something went wrong, please try again';
          return Redirect::back()
                  ->withErrors($errMsg)
                  ->withInput();
      }
    }
  }

  public function edit($branch_id)
  {
    $this->data['page_title'] = 'Admin | Update Branch';
    $branch = Branch::find($branch_id); 
    $districtList = District::where('is_deleted','0')->where('status','1')->get();
    $this->data['districtList']=$districtList;  
    $this->data['branch']=$branch;       
    return view('admin.branch.edit', $this->data);
  }

  public function update(Request $request, $branch_id)
  {
    $validator = Validator::make($request->all(), 
    [
      'district'          => 'required',
      'block'             => 'required|unique:branch_details,block|string|max:200',
      'gram_panchayat'    => 'required|string|max:200',
      'bank_name'         => 'required|string|max:200',
      'branch_name'       => 'required|string|max:200',
      'ifsc_code'         => 'required|string|max:200',
      'branch_code'       => 'required|min:3|max:3',
      'latitude'          => 'required|numeric|between:0,99.9999999',
      'logitude'          => 'required|numeric|between:0,99.9999999',
    ],
    [      
      'required' => 'The :attribute field is required',
      'district.max' => 'district can be maximum :max chars long',
      'block.max' => 'block can be maximum :max chars long',
      'gram_panchayat.max' => 'gram panchayat can be maximum :max chars long',
      'bank_name.max' => 'bank name can be maximum :max chars long',
      'ifsc_code.max' => 'ifsc code can be maximum :max chars long',
    ]);
    if ($validator->fails()) {      
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    }
    else
    {
      $district= $request->district;
      $block= Str::lower($request->block);
      $gram_panchayat = $request->gram_panchayat;
      $bank_name = $request->bank_name;
      $branch_name = $request->branch_name;
      $ifsc_code = $request->ifsc_code;
      $branch_code = $request->branch_code;
      $latitude = $request->latitude;
      $logitude = $request->logitude;
      $status = $request->status == true ? '1' : '0';

      $branchUpdate = Branch::where('id',$branch_id)->update([
        'district'=>$district,
        'block'=>$block,
        'gram_panchayat'=>$gram_panchayat,
        'name_of_the_bank'=>$bank_name,
        'name_of_the_branch'=>$branch_name,
        'ifsc_code'=>$ifsc_code,
        'branch_code'=>$branch_code,
        'latitude'=>$latitude,
        'longitude'=>$logitude,
        'status'=>$status,
       
      ]);
      if ($branchUpdate != null) {          
          $successMsg = 'Branch Update Successfully';
          return Redirect('admin/branch')
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

  public function destroy($branch_id)
  {
    $deleted_by = Auth::guard('admin')->user()->id;
    $deleteBranch = Branch::where('id', $branch_id)->update([
      'is_deleted' =>'1',
      'deleted_by'=>$deleted_by
    ]);                                                
    $successMsg="Branch deleted successfully!";
    return Redirect::back()
    ->withSuccess($successMsg);  
  }
}
