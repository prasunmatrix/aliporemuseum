<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;
use DB;
use App\Models\{Employee, EmployeeLeave};
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportEmployeeLeave;

class EmployeeController extends Controller
{
  /**
   * create a new instance of the class
   *
   * @return void
   */
  function __construct()
  {
    $this->middleware('permission:manage-employee,admin', ['only' => ['index', 'createEmployeeLeave', 'importEmployeeLeave']]);
  }
  public function index()
  {
    $this->data['page_title'] = 'Admin | Employee';
    $employee = Employee::where('status', '1')->where('is_deleted', '0')->get();
    $this->data['employee'] = $employee;
    return view('admin.employee.index', $this->data);
  }
  public function createEmployeeLeave()
  {
    $this->data['page_title'] = 'Admin | Add Employee Leave';
    return view('admin.employee.createemployeeleave', $this->data);
  }
  public function importEmployeeLeave(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'file' => "required|mimes:csv,xlsx,xls|max:10000",
      ],
      [
        'required' => 'The :attribute field is required',
      ]
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      EmployeeLeave::truncate();
      Excel::import(new ImportEmployeeLeave, $request->file('file')->store('files'));
      $successMsg = 'Employee Leave Import Successfully';
      return redirect()->back()->withSuccess($successMsg);
    }
  }
  // public function importEmployeeLeave(Request $request)
  // {
  //   $validator = Validator::make(
  //     $request->all(),
  //     [
  //       'file' => "required|mimes:csv,txt",
  //     ],
  //     [
  //       'required' => 'The :attribute field is required',
  //     ]
  //   );
  //   if ($validator->fails()) {
  //     return Redirect::back()
  //       ->withErrors($validator)
  //       ->withInput();
  //   } else {
  //     EmployeeLeave::truncate();
  //     //Excel::import(new ImportEmployeeLeave, $request->file('file')->store('files'));
  //     @$filename = $_FILES["file"]["tmp_name"];
  //     //dd($filename);
  //     @$file = fopen($filename, "r");
  //     $count = 0;                                         // add this line
  //     while ((@$emapData = fgetcsv(@$file, 10000, ",")) !== FALSE) {
  //       //print_r($emapData);
  //       //exit();
  //       $count++;
  //       if ($count > 1) {
  //         //$sql = "INSERT into prod_list_1(p_bench,p_name,p_price,p_reason) values ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]')";
  //         //mysql_query($sql);
  //         $employeeLeave = EmployeeLeave::create([
  //           'emp_id' => trim($emapData[0]),
  //           'casual_leave' => trim($emapData[1]),
  //           'sick_leave' => trim($emapData[2]),
  //           'privilege_leave' => trim($emapData[3]),
  //           'maternity_leave' => trim($emapData[4]),
  //           'bereavement_leave' => trim($emapData[5])
  //         ]);
  //       }                                              // add this line
  //     }
  //     $successMsg = 'Employee Leave Import Successfully';
  //     return redirect()->back()->withSuccess($successMsg);
  //   }
  // }
}
