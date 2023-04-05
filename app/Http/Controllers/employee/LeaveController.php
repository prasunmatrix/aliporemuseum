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
use App\Models\BranchMaster;
use App\Models\HireLebelLeaveAction;
use App\Models\EmployeeModifyLeave;
use Illuminate\Support\Facades\File;
use DateTime;
use Mail;

class LeaveController extends Controller
{

  public function index(Request $request)
  {
    //dd('test4455');
    if (Auth::guard('employee')->check()) 
    {
      $this->data['page_title'] = 'Employee | Leave';

      $created_by = Auth::guard('employee')->user()->id;
      $employee = Employee::where('id', $created_by)->where('is_deleted', '0')->first();
      //dd($employee->emp_id);
      $emp_id = $employee->emp_id;
      $data['leave'] = EmployeeApplyLeave::where('emp_id', $emp_id)->where('is_deleted', '0')->orderby('id', 'DESC')->get();
      for($i=0; $i<count($data['leave']); $i++)
			{
				$data['leave'][$i]['leavename'] = Leavetype::where('id', $data['leave'][$i]['leave_type'])->first();
			}
      $this->data['employee'] = $data['leave'];
      return view('employee.leave.index', $this->data);
    }
    else 
    {
      return view('employee.login.employee_login', $this->data);
    }

  }

  public function create()
  {
    $this->data['page_title'] = 'Employee | Add Leave';
    $this->data['panel_title'] = 'Employee Add Leave';

    $leaveType = Leavetype::where('id', '!=', '')->get();
    $this->data['leaveType'] = $leaveType;

    $created_by = Auth::guard('employee')->user()->id;
    $employee = Employee::where('id', $created_by)->where('is_deleted', '0')->first();
    //dd($employee->emp_id);
    $this->data['empId'] = $employee->emp_id;
    $branch = $employee->branch;
    //dd($branch);

    $branchData = BranchMaster::where('branchName', $branch)->first();
    if($branchData)
    {
      $this->data['bManagerId'] = $branchData->empId;
    }
    else
    {
      $this->data['bManagerId'] = '';
    }
    

    return view('employee.leave.create',$this->data);
  }

  public function store(Request $request)
  {
    //dd($request->all());  
    $validator = Validator::make($request->all(), 
    [
      'leave_type'        => 'required',
      'leave_start_date'  => 'required',
      'leave_end_date'    => 'required',
      'description'       => 'required',
      'supportingDoc'     => 'nullable|mimes:jpeg,jpg,png',
    ],
    [      
      'required' => 'The :attribute field is required',
    ]);
    if ($validator->fails()) 
    {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    } 
    else 
    {
        $empId            = $request->empId;
        $bManagerId       = $request->bManagerId;
        $leave_type       = $request->leave_type;
        $leave_start_date = $request->leave_start_date;
        $leave_end_date   = $request->leave_end_date;
        $description      = $request->description;

        $datetime1 = new DateTime($leave_start_date);
        $datetime2 = new DateTime($leave_end_date);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        if($days==0)
        {
          $days=1;
        }
        else
        {
          $days=$days+1;
        }
        //dd($days);

        if ($request->hasFile('supportingDoc')) :
        $file = $request->file('supportingDoc');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path().'/uploads/leaveSupportingDoc', $filename);
        //$image = $filename;
        endif;
        if(!empty($filename))
        {
          $image = $filename;
        }
        else
        {
          $image="";
        }

        $leave = EmployeeApplyLeave::create([
          'emp_id'=>$empId,
          'start_date'=>$leave_start_date,
          'end_date'=>$leave_end_date,
          'daysCount'=>$days,
          'leave_type'=>$leave_type,
          'note'=>$description,
          'supportingDoc'=>$image,
          'status'=>'pending',
          'bManagerId'=>$bManagerId
        ]);

        $lastInsertedId= $leave->id;

        $branchData = BranchMaster::where('empId', $empId)->first();
        if($branchData)
        {
          $chkManager = $branchData->is_manager;
          if($chkManager == 1)
          {
            $leave = HireLebelLeaveAction::create([
              'leaveId'=>$lastInsertedId,
              'emp_id'=>$empId,
              'start_date'=>$leave_start_date,
              'end_date'=>$leave_end_date,
              'daysCount'=>$days,
              'leave_type'=>$leave_type,
              'note'=>$description,
              'supportingDoc'=>$image,
              'status'=>'pending'
              /*'bManagerId'=>$pApprovedBy,
              'pApprovedBy'=>$pApprovedBy*/
            ]);
          }
        }

        $employee = Employee::where('emp_id', $empId)->where('is_deleted', '0')->first();
        $chkHeadBranch = $employee->branch;

        if($chkHeadBranch == 'HEAD OFFICE')
        {
          $leave = HireLebelLeaveAction::create([
            'leaveId'=>$lastInsertedId,
            'emp_id'=>$empId,
            'start_date'=>$leave_start_date,
            'end_date'=>$leave_end_date,
            'daysCount'=>$days,
            'leave_type'=>$leave_type,
            'note'=>$description,
            'supportingDoc'=>$image,
            'status'=>'pending'
            /*'bManagerId'=>$pApprovedBy,
            'pApprovedBy'=>$pApprovedBy*/
          ]);
        }

        if ($leave != null) 
        { 
          $created_by = Auth::guard('employee')->user()->id;
          $employee = Employee::where('id', $created_by)->where('is_deleted', '0')->first();
          $uname = $employee->name;
          $phone = $employee->phone;

          $branch = $employee->branch;
          $post = $employee->post;
          $employee_type = $employee->employee_type;
          

          $data['full_name'] = $uname;
          //$data['emailId'] = 'testuseremail@gmail.com';
          $data['phone'] = $phone;
          $data['startDate'] = $leave_start_date;
          $data['endDate'] = $leave_end_date;
          $data['countDays'] = $days;
          $data['messages'] = $description;

          $data['branch'] = $branch;
          $data['post'] = $post;
          $data['employee_type'] = $employee_type;

          /*$branchData = BranchMaster::where('empId', $bManagerId)->first();
          $branchMngEmail = $branchData->email;*/
         /*estbrccbltd@gmail.com
          ceorccbltd@gmail.com
          dgmitrccbltd@gmail.com*/
          //if($chkHeadBranch == 'HEAD OFFICE' || $chkManager == 1)
          if($chkHeadBranch == 'HEAD OFFICE')
          {
            $sendmails = array('estbrccbltd@gmail.com','ceorccbltd@gmail.com','dgmitrccbltd@gmail.com');
          }
          else if($branchData)
          {
            //$sendmails = array('estbrccbltd@gmail.com','ceorccbltd@gmail.com','dgmitrccbltd@gmail.com');
            $sendmails = array('debnidhi@matrixnmedia.com');
          }
          else
          {
            $branchData = BranchMaster::where('empId', $bManagerId)->first();
            $branchMngEmail = $branchData->email;
            $sendmails = array($branchMngEmail);
            //$sendmails = array('debnidhi@matrixnmedia.com');
          }
          //$sendmails = array($branchMngEmail);
          $data['email'] = $sendmails;
          $attchFile = public_path() . '/uploads/leaveSupportingDoc/' . $image;
          $data['attchFile'] = $attchFile;

          if (!empty($filename)) 
          {
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

          $successMsg = 'Leave Applied Successfully';
          return Redirect('employee/leave')
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


  public function leavecancelbyemployee($leave_id)
  {
    $canceled_by = Auth::guard('employee')->user()->emp_id;
    //dd($canceled_by);

    /* Insert old data of the leave into Eployee Modify Leave Table for Track the Leave Start */ 
    $leaveData = EmployeeApplyLeave::where('id', $leave_id)->first();
    $leave = EmployeeModifyLeave::create([
      'leave_id'=>$leave_id,
      'emp_id'=>$leaveData->emp_id,
      'leave_type'=>$leaveData->leave_type,
      'start_date'=>$leaveData->start_date,
      'end_date'=>$leaveData->end_date,
      'daysCount'=>$leaveData->daysCount,
      'note'=>$leaveData->note,
      'status'=>$leaveData->status
    ]);
    /* Insert old data of the leave into Eployee Modify Leave Table for Track the Leave End */

    $cancelLeave = EmployeeApplyLeave::where('id', $leave_id)->update([
      'status' => 'cancel'
    ]);

    $cancelHireLevelLeave = HireLebelLeaveAction::where('leaveId', $leave_id)->update([
      'status' => 'cancel'
    ]);

    //Email sent to Branch Manager Start
    if($cancelLeave)
    {
        $leaveDetails = EmployeeApplyLeave::where('id', $leave_id)->first();

        $employee = Employee::where('emp_id', $canceled_by)->first();
        $branchName = $employee->branch;

        $branchData = BranchMaster::where('branchName','=', $branchName)->first();
        $bManagerName = $branchData->branchHead;
        $bManagerEmail = $branchData->email;

        $data['full_name'] = $employee->name;
        $data['phone'] = $employee->phone;
        $data['branch'] = $employee->branch;
        $data['post'] = $employee->post;
        $data['employee_type'] = $employee->employee_type;

        $data['startDate'] = $leaveDetails->start_date;
        $data['endDate'] = $leaveDetails->end_date;
        $data['countDays'] = $leaveDetails->daysCount;
        $data['messages'] = $leaveDetails->note;
        $data['leaveStatus'] = $leaveDetails->status;

        $bManagerId = $leaveDetails->bManagerId;
        $pApprovedBy = $leaveDetails->pApprovedBy;
        $fApprovedBy = $leaveDetails->fApprovedBy;
        
        if($pApprovedBy && $fApprovedBy)
        {
          //$data['email'] = array('estbrccbltd@gmail.com','ceorccbltd@gmail.com','dgmitrccbltd@gmail.com');
          $data['email'] = 'debnidhi@matrixnmedia.com';
        }
        else
        {
          //$data['email'] = $bManagerEmail;
          $data['email'] = 'debnidhi@matrixnmedia.com';
        }

        Mail::send('email.leave-cancelled-by-employee', $data, function ($message) use ($data) {
          $message->from('no-reply@rccb.com', "RCCB");
          $message->subject("Leave Request | Cancelled by Employee");
          $message->to($data['email']);
        });
    }
    //Email sent to Branch Manager End

    $successMsg = "Leave cancelled successfully!";
    return Redirect::back()
      ->withSuccess($successMsg);
  }


  public function leavemodifybyemployee($leave_id)
  {
    //dd($leave_id);
    $this->data['page_title'] = 'Employee | Modify Leave';

    $leaveData = EmployeeApplyLeave::find($leave_id);
    $this->data['leaveData']=$leaveData;
    //dd($leaveData);
    $empDetails = Employee::where('emp_id',$leaveData->emp_id)->first();
    $this->data['empDetails'] = $empDetails;

    $leaveType = Leavetype::where('id', '!=', '')->get()->toArray();
    $this->data['leaveType'] = $leaveType;
    //dd($leaveType);

    return view('employee.leave.edit', $this->data);
  }

  public function updateemployeeleave(Request $request, $leave_id)
  {
    //dd($request);
    $validator = Validator::make($request->all(), 
    [
      'leave_type'        => 'required',
      'leave_start_date'  => 'required',
      'leave_end_date'    => 'required',
      'description'       => 'required',
      'supportingDoc'     => 'nullable|mimes:jpeg,jpg,png',
    ],
    [      
      'required' => 'The :attribute field is required',
    ]);
    if ($validator->fails()) 
    {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    } 
    else
    {
      /* Old Leave Data Fetch From Table Start */ 
      $oldLeaveData = EmployeeApplyLeave::find($leave_id);
      
      $leave_type_old = $oldLeaveData->leave_type;
      $start_date_old = $oldLeaveData->start_date;
      $end_date_old = $oldLeaveData->end_date;
      $daysCount_old = $oldLeaveData->daysCount;
      $note_old = $oldLeaveData->note;
      $status_old = $oldLeaveData->status;
      /* Old Leave Data Fetch From Table End */ 
      $leaveId= $request->leaveId;
      $emp_id= $request->emp_id;
      $leave_type= $request->leave_type;
      $leave_start_date= $request->leave_start_date;
      $leave_end_date= $request->leave_end_date;
      $description= $request->description;
      $supportingDoc_old=$request->supportingDoc_old;

      $datetime1 = new DateTime($leave_start_date);
      $datetime2 = new DateTime($leave_end_date);
      $interval = $datetime1->diff($datetime2);
      $days = $interval->format('%a');
      if($days==0)
      {
        $days=1;
      }
      else
      {
        $days=$days+1;
      }

      if($request->hasFile('supportingDoc')) :
        $file = $request->file('supportingDoc');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path().'/uploads/leaveSupportingDoc', $filename);
        //$image = $filename;
      endif;
      if(!empty($filename) && File::exists(public_path("uploads/leaveSupportingDoc/".$supportingDoc_old)))
      {
        File::delete(public_path("uploads/leaveSupportingDoc/".$supportingDoc_old));
      }
    
      if(!empty($filename))
      {
        $image=$filename;
      }
      else
      {
        $image=$supportingDoc_old;
      }
      /* Update Eployee Apply Leave Table Start */ 
      $updateLeave = EmployeeApplyLeave::where('id', $leave_id)->update([
        'start_date'=>$leave_start_date,
        'end_date'=>$leave_end_date,
        'daysCount'=>$days,
        'leave_type'=>$leave_type,
        'note'=>$description,
        'supportingDoc'=>$image,
        'status' => 'pending'
      ]);
     /* Update Eployee Apply Leave Table End */ 
      if ($updateLeave != null) 
      {
        /* Insert old data of the leave into Eployee Modify Leave Table for Track the Leave Start */ 
        $leave = EmployeeModifyLeave::create([
          'leave_id'=>$leaveId,
          'emp_id'=>$emp_id,
          'leave_type'=>$leave_type_old,
          'start_date'=>$start_date_old,
          'end_date'=>$end_date_old,
          'daysCount'=>$daysCount_old,
          'note'=>$note_old,
          'status'=>$status_old
        ]);
        /* Insert old data of the leave into Eployee Modify Leave Table for Track the Leave End */

        /** Remove Leave from HireLebelLeaveAction Table Start */
        $removeLeaveData = HireLebelLeaveAction::where('leaveId', $leave_id)->first();
        if($removeLeaveData)
        {
          HireLebelLeaveAction::where('leaveId', $leave_id)->delete();
        }

        /** Remove Leave from HireLebelLeaveAction Table End */
        $successMsg = 'Leave Updated Successfully';
        return Redirect('employee/leave')
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

}
