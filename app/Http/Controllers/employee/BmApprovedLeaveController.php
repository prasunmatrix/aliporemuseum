<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Validator;
use Hash;
use App\Models\Employee;
use App\Models\Leavetype;
use App\Models\EmployeeApplyLeave;
use App\Models\HireLebelLeaveAction;
use App\Models\BranchMaster;

use DateTime;
use Mail;
use Illuminate\Support\Facades\DB;
use Config;

class BmApprovedLeaveController extends Controller
{

  public function index(Request $request)
  {
    //dd('test4455');
    if (Auth::guard('employee')->check()) 
    {
      $this->data['page_title'] = 'Employee | Approve Leave';

      $created_by = Auth::guard('employee')->user()->id;
      $employee = Employee::where('id', $created_by)->where('is_deleted', '0')->first();
      //dd($employee->emp_id);
      $emp_id = $employee->emp_id;
      if ( $emp_id==1001 || $emp_id==167 || $emp_id==236 )
      {
        $data['leave'] = HireLebelLeaveAction::whereIn('status', ['partially approve', 'pending','approve','rejected','cancel'])->orderby('id', 'DESC')->get();
        for($i=0; $i<count($data['leave']); $i++)
        {
          $data['leave'][$i]['leavename'] = Leavetype::where('id', $data['leave'][$i]['leave_type'])->first();
          $data['leave'][$i]['empName'] = Employee::where('emp_id', $data['leave'][$i]['emp_id'])->first();
        }
        $this->data['employee'] = $data['leave'];
        //dd($data['leave'][0]->empName);
        return view('employee.hirelebelapproveleave.index', $this->data);
        
      }
      else
      {
        $data['leave'] = EmployeeApplyLeave::where('bManagerId', $emp_id)->where('emp_id', '!=', $emp_id)->where('is_deleted', '0')->orderby('id', 'DESC')->get();
        for($i=0; $i<count($data['leave']); $i++)
        {
          $data['leave'][$i]['leavename'] = Leavetype::where('id', $data['leave'][$i]['leave_type'])->first();
          $data['leave'][$i]['empName'] = Employee::where('emp_id', $data['leave'][$i]['emp_id'])->first();
        }
        $this->data['employee'] = $data['leave'];
        //dd($data['leave'][0]->empName);
        return view('employee.bmapproveleave.index', $this->data);
      }
      
      
    }
    else 
    {
      return view('employee.login.employee_login', $this->data);
    }

  }

  public function edit(Request $request, $encryptString)
  {
    $this->data['page_title'] = 'Employee | Approve Leave';

    $leave_id = decrypt($encryptString, Config::get('Constant.ENC_KEY')); // get user-id After Decrypt with salt key.

    $leaveData = EmployeeApplyLeave::find($leave_id);
    $this->data['leaveData']=$leaveData;
    //dd($leaveData);
    $empDetails = Employee::where('emp_id',$leaveData->emp_id)->first();
    $this->data['empDetails'] = $empDetails;

    $leaveType = Leavetype::where('id', '!=', '')->get()->toArray();
    $this->data['leaveType'] = $leaveType;
    //dd($leaveType);

    return view('employee.bmapproveleave.edit', $this->data);
  }


  public function update(Request $request, $leave_id)
  {
    //dd($request);
    //$updated_by = Auth::guard('admin')->user()->id;
    $status = $request->action;
    $pApprovedBy = $request->managerId;

    $leaveId = $request->leaveId;
    $empId = $request->emp_id;
    $leave_type = $request->leave_type;
    $name = $request->name;
    $phone = $request->phone;
    $leave_start_date = $request->leave_start_date;
    $leave_end_date = $request->leave_end_date;
    $days = $request->days;
    $description = $request->description;
    $supportingDoc = $request->supportingDoc;

    if($status == 'rejected')
    {
      $updateData = DB::table('employee_apply_leave')
                ->where('id', $leave_id)
                ->update(['status' => $status,'rejectBy' =>$pApprovedBy]);
      
      if ($updateData != null) 
      {
        //send email to employee Start
        $employee = Employee::where('emp_id', $empId)->where('is_deleted', '0')->first();
        $empEmail = $employee->email;

        $branchData = BranchMaster::where('empId', $pApprovedBy)->first();
        $actionBy = $branchData->branchHead;

        if($empEmail)
        {
          $data['full_name'] = $name;
          $data['startDate'] = $leave_start_date;
          $data['endDate'] = $leave_end_date;
          $data['countDays'] = $days;
          $data['messages'] = $description;
          $data['actionBy'] = $actionBy;
          $data['leaveStatus'] = $status;
          $data['email'] = $empEmail;
          //mahadebmajumdar.rccbltd@gmail.com

          Mail::send('email.leave-approved-reject-email-to-employee', $data, function ($message) use ($data) {
            $message->from('no-reply@rccb.com', "RCCB");
            $message->subject("Leave Request | Rejected");
            $message->to($data['email']);
          });
        }
        //send email to employee End

        $successMsg = 'Leave Updated Successfully';
        return Redirect('employee/bmapproveleave')
                ->withSuccess($successMsg);
      } 
      else 
      {
        $errMsg = array();
        $errMsg['registrationerror'] = 'Something went wrong, please try again';
        return Redirect::back()
                ->withErrors($errMsg)
                ->withInput();
      }    

    }
    else
    {
      $updateData = DB::table('employee_apply_leave')
                ->where('id', $leave_id)
                ->update(['status' => $status,'pApprovedBy' =>$pApprovedBy]);

      $leave = HireLebelLeaveAction::create([
        'leaveId'=>$leaveId,
        'emp_id'=>$empId,
        'start_date'=>$leave_start_date,
        'end_date'=>$leave_end_date,
        'daysCount'=>$days,
        'leave_type'=>$leave_type,
        'note'=>$description,
        'supportingDoc'=>$supportingDoc,
        'status'=>'partially approve',
        'bManagerId'=>$pApprovedBy,
        'pApprovedBy'=>$pApprovedBy
      ]);

      if ($leave != null) 
      {
        $employee = Employee::where('emp_id', $empId)->where('is_deleted', '0')->first();
        //$empEmail = $employee->email;
        $branch = $employee->branch;
        $post = $employee->post;
        $employee_type = $employee->employee_type;

        $data['full_name'] = $name;
        $data['phone'] = $phone;
        $data['startDate'] = $leave_start_date;
        $data['endDate'] = $leave_end_date;
        $data['countDays'] = $days;
        $data['messages'] = $description;

        $data['branch'] = $branch;
        $data['post'] = $post;
        $data['employee_type'] = $employee_type;

        $sendmails = array('estbrccbltd@gmail.com','ceorccbltd@gmail.com','dgmitrccbltd@gmail.com');
        //$data['email'] = $sendmails;  
        $data['email'] = array('debnidhi@matrixnmedia.com');

        if (!empty($supportingDoc)) 
        {
          $attchFile = public_path() . '/uploads/leaveSupportingDoc/' . $supportingDoc;
          $data['attchFile'] = $attchFile;

          Mail::send('email.leave-admin-email', $data, function ($message) use ($data) {
            $message->from('no-reply@rccb.com', "RCCB");
            $message->subject("Apply Leave - RCCB");
            //$message->to('prasun@matrixnmedia.com');
            $message->to($data['email']);
            $message->attach($data['attchFile']);
          });
        } 
        else 
        {
          Mail::send('email.leave-admin-email', $data, function ($message) use ($data) {
            $message->from('no-reply@rccb.com', "RCCB");
            $message->subject("Apply Leave - RCCB");
            $message->to($data['email']);
          });
        }

        $successMsg = 'Leave Updated Successfully';
        return Redirect('employee/bmapproveleave')
                ->withSuccess($successMsg);
      } 
      else 
      {
        $errMsg = array();
        $errMsg['registrationerror'] = 'Something went wrong, please try again';
        return Redirect::back()
                ->withErrors($errMsg)
                ->withInput();
      }

    }
    
  }


  public function hireleave(Request $request, $encryptString)
  {
    $this->data['page_title'] = 'Employee | Approve Leave';

    $leave_id = decrypt($encryptString, Config::get('Constant.ENC_KEY')); // get user-id After Decrypt with salt key.
    
    $leaveData = HireLebelLeaveAction::find($leave_id);
    $this->data['leaveData']=$leaveData;
    //dd($leaveData);
    $empDetails = Employee::where('emp_id',$leaveData->emp_id)->first();
    $this->data['empDetails'] = $empDetails;

    $leaveType = Leavetype::where('id', '!=', '')->get()->toArray();
    $this->data['leaveType'] = $leaveType;
    //dd($leaveType);

    return view('employee.hirelebelapproveleave.edit', $this->data);
  }

  public function updatehireleave(Request $request, $leave_id)
  {
    //dd($request);
    //$updated_by = Auth::guard('admin')->user()->id;
    $status = $request->action;
    $pApprovedBy = $request->managerId;

    //12-10-2022
    $empId = $request->emp_id;
    $name = $request->name;
    $leave_start_date = $request->leave_start_date;
    $leave_end_date = $request->leave_end_date;
    $days = $request->days;
    $description = $request->description;
    //12-10-2022

    if($status == 'approve')
    {
      $updateData = DB::table('hire_lebel_leave_action')
                ->where('id', $leave_id)
                ->update(['status' => $status,'fApprovedBy' =>$pApprovedBy]);
      
      $updateDataNew = DB::table('employee_apply_leave')
                ->where('id', $request->leaveId)
                ->update(['status' => $status,'fApprovedBy' =>$pApprovedBy]);  
                
      //send email to employee Start
      $employee = Employee::where('emp_id', $empId)->where('is_deleted', '0')->first();
      $empEmail = $employee->email;

      $branchData = BranchMaster::where('empId', $pApprovedBy)->first();
      $actionBy = $branchData->branchHead;

      if($empEmail)
      {
        $data['full_name'] = $name;
        $data['startDate'] = $leave_start_date;
        $data['endDate'] = $leave_end_date;
        $data['countDays'] = $days;
        $data['messages'] = $description;
        $data['actionBy'] = $actionBy;
        $data['leaveStatus'] = $status;
        $data['email'] = $empEmail;

        Mail::send('email.leave-approved-reject-email-to-employee', $data, function ($message) use ($data) {
          $message->from('no-reply@rccb.com', "RCCB");
          $message->subject("Leave Request | Approved");
          $message->to($data['email']);
        });
      }
      //send email to employee End          
    }
    else
    {
      $updateData = DB::table('hire_lebel_leave_action')
                ->where('id', $leave_id)
                ->update(['status' => $status,'rejectBy' =>$pApprovedBy]);
      
      $updateDataNew = DB::table('employee_apply_leave')
                ->where('id', $request->leaveId)
                ->update(['status' => $status,'rejectBy' =>$pApprovedBy]); 
                
      //send email to employee Start
      $employee = Employee::where('emp_id', $empId)->where('is_deleted', '0')->first();
      $empEmail = $employee->email;

      $branchData = BranchMaster::where('empId', $pApprovedBy)->first();
      $actionBy = $branchData->branchHead;

      if($empEmail)
      {
        $data['full_name'] = $name;
        $data['startDate'] = $leave_start_date;
        $data['endDate'] = $leave_end_date;
        $data['countDays'] = $days;
        $data['messages'] = $description;
        $data['actionBy'] = $actionBy;
        $data['leaveStatus'] = $status;
        $data['email'] = $empEmail;

        Mail::send('email.leave-approved-reject-email-to-employee', $data, function ($message) use ($data) {
          $message->from('no-reply@rccb.com', "RCCB");
          $message->subject("Leave Request | Rejected");
          $message->to($data['email']);
        });
      }
      //send email to employee End             
    }
  

    if ($updateData != null && $updateDataNew != null) 
    {
      $successMsg = 'Leave Updated Successfully';
      return Redirect('employee/bmapproveleave')
              ->withSuccess($successMsg);
    } 
    else 
    {
      $errMsg = array();
      $errMsg['registrationerror'] = 'Something went wrong, please try again';
      return Redirect::back()
              ->withErrors($errMsg)
              ->withInput();
    } 
    
  }

}
