<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Validator;
use Hash;
use App\Models\Employee;

class EmployeeController extends Controller
{
  public function index(Request $request)
  {
    //dd('test4455');
    $this->data['page_title'] = 'Employee:Login';
    $this->data['panel_title'] = 'Employee:Login';
    if (Auth::guard('employee')->check()) {
      // If admin is logged in, redirect him to dashboard page //
      return \Redirect::route('employee.dashboard');
    } else {
      return view('employee.login.employee_login', $this->data);
    }
  }
  public function verifylogin(Request $request)
  {
    //dd('test employee');
    if (Auth::guard('employee')->check()) {
      // If admin is logged in, redirect him/her to dashboard page //
      return Redirect::Route('employee.dashboard');
    } else {
      try {
        if ($request->isMethod('post')) {
          // Checking validation
          $validationCondition = array(
            'employee_id' => 'required',
            'password'  => 'required',
          );
          $Validator = Validator::make($request->all(), $validationCondition);

          if ($Validator->fails()) {
            // If validation error occurs, load the error listing
            return Redirect::route('employee.login')->withErrors($Validator);
          } else {
            $rememberMe = false; // set default boolean value for remember me

            if ($request->input('remember_me')) // if user checked remember me
              $rememberMe = true; // set user value

            $employee_id = $request->input('employee_id');
            $password = $request->input('password');

            /* Check if user with same email exists, who is:-
                    1. Blocked or Not
                      */
            $employeeExists = Employee::where(
              array(
                'emp_id' => $employee_id,
                'status' => '1',
              )
            )->count();
            //dd($employeeExists); 

            if ($employeeExists > 0) {
              // if user exists, check the password
              $auth = auth()->guard('employee')->attempt([
                'emp_id' => $employee_id,
                'password' => $password,
              ], $rememberMe);

              if ($auth) {
                return Redirect::Route('employee.dashboard');
              } else {
                $request->session()->flash('error', 'Invalid Password');
                return Redirect::Route('employee.login');
              }
            } else {
              $request->session()->flash('error', 'You are not an authorized user');
              return Redirect::Route('employee.login');
            }
          }
        }
      } catch (Exception $e) {
        return Redirect::Route('employee.login')->with('error', $e->getMessage());
      }
    }
  }
  public function dashboardView()
  {
    $this->data['page_title'] = 'Employee | Dashboard';
    $this->data['panel_title'] = 'Employee Dashboard';

    // $this->data['total_branch'] = Branch::where('is_deleted', '=', '0')
    //   ->get()
    //   ->count();
    // $this->data['total_tender'] = Tender::where('is_deleted', '=', '0')
    //   ->get()
    //   ->count();

    //  $this->data['total_user']=User::get()->count();
    //  $this->data['total_knowledge_corner'] = KnowledgeCorner::where('is_deleted', '=', '0')
    //  ->get()
    //  ->count();  
    //  $this->data['branchDetails'] = Branch::join('district', 'district.id', '=', 'branch_details.district')
    // ->select('branch_details.*','district.district_name')
    // ->where('branch_details.is_deleted','0')->get(); 



    return view('employee.dashboard.index', $this->data);
  }
  public function logout()
  {
    // echo "aaa";die;
    if (Auth::guard('employee')->logout()) {
      return Redirect::Route('employee.login');
    } else {
      return Redirect::Route('employee.dashboard');
    }
  }
  public function showChangePasswordForm()
  {
    $this->data['page_title'] = 'Employee | Change Password';
    $this->data['panel_title'] = 'Change Password';
    return view('employee.dashboard.changepassword', $this->data);
  }
  public function changePassword(Request $request)
  {
    //dd($request->all());
    //dd(Auth::guard('employee')->user()->password);
    if (!(Hash::check($request->get('current_password'), Auth::guard('employee')->user()->password))) {
      // The passwords matches
      return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
    } else {
      try {

        $validationCondition = [
          'new_password' => 'required',
          'confirm_password' => 'required|same:new_password',
        ];

        $validationMessages = array(
          'new_password.required' => 'New Password is required.',
          'confirm_password.required' => 'Confirm Password is required.',
          'confirm_password.same' => 'Confirm Password should be same as new password.',
        );

        $Validator = Validator::make($request->all(), $validationCondition, $validationMessages);
        if ($Validator->fails()) {
          // If validation error occurs, load the error listing
          return redirect()->back()->withErrors($Validator);
        } else {
          $user = Employee::findOrFail(Auth::guard('employee')->user()->id);
          $user->password = $request->new_password;
          $saveResposne = $user->save();
          if ($saveResposne == true) {
            return redirect()->back()->with("success", "Password changed successfully !");
          } else {
            return redirect()->back()->with("error", "Password changed successfully !");
          }
        }
      } catch (Exception $e) {
        return Redirect::Route('employee.changePassword')->with('error', $e->getMessage());
      }
    }
  }
}
