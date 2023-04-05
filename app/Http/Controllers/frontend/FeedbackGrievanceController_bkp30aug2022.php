<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Grievance,Feedback};
use Redirect;
use DB;
use Validator;
use Mail;

class FeedbackGrievanceController extends Controller
{
  public function index()
  {
    return view('frontend.feedback-grievance.index');
  }
  public function grievanceId(Request $request)
  {
    //dd($request->value);
    $current_year = date('Y');
    $grievance = Grievance::select('complain_id')->orderBy('id', 'desc')->first();
    //dd($grievance);
    if ($grievance == "") {
      $lastNo = 1;
    } else {
      $part = explode("/", $grievance->complain_id);
      $lastNo = $part[2] + 1;
    }
    $lastId = str_pad($lastNo, 4, '0', STR_PAD_LEFT);
    echo $complainID = $current_year . '/' . $request->value . '/' . $lastId;
    die;
  }
  public function grievancePost(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'uname'              => 'required',
        'email'              => 'required|email',
        'phone'              => 'required|min:10|max:10',
        'branch'             => 'required',
        'file'               => 'nullable',
        'msg'                => 'required'
      ],
      [
        'required' => 'The :attribute field is required',
        'email'    => 'This is not a valid email format',
        'phone.min' => 'Phone Number has to be :min chars long',
        'phone.max' => 'Phone Number can be maximum :max chars long',
      ]
    );

    if ($validator->fails()) {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $uname = trim($request->uname);
      $email = trim($request->email);
      $complain_id = trim($request->complain_id);
      $phone = trim($request->phone);
      $branch = trim($request->branch);
      $msg = trim($request->msg);

      if ($request->hasFile('file')) :
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/grievance', $filename);
      //$image = $filename;
      endif;
      if (!empty($filename)) {
        $file_name = $filename;
      } else {
        $file_name = "";
      }

      $grievance = Grievance::create([
        'complain_id'=>$complain_id,
        'fullname'=>$uname,
        'phone'=>$phone,
        'email'=>$email,
        'branch'=>$branch,
        'messages'=>$msg,
        'attachment'=>$file_name
      ]);

      if ($grievance != null) {
        
        $data['full_name']=$uname;
        $data['emailId']=$email;
        $data['phone']=$phone;
        $data['branch']=$branch;
        $data['complain_id']=$complain_id;
        $data['messages']=$msg;
        
        
        Mail::send('email.grievance-admin-email', $data, function($message) use ($data)
        {
            $message->from('no-reply@rccb.com', "RCCB");
            $message->subject("Grievance - RCCB");
            $message->to('prasun@matrixnmedia.com');
        });
        
        $successMsg = 'Your message has been sent. Thank you!';
        return Redirect::back()
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
  public function feedbackId(Request $request)
  {
    //dd($request->value);
    $current_year = date('Y');
    $feedback = Feedback::select('feedback_id')->orderBy('id', 'desc')->first();
    if ($feedback == "") {
      $lastNo = 1;
    } else {
      $part = explode("/", $feedback->feedback_id);
      $lastNo = $part[2] + 1;
    }
    $lastId = str_pad($lastNo, 4, '0', STR_PAD_LEFT);
    echo $feedbackID = $current_year . '/' . $request->value . '/' . $lastId;
    die;
  }
  public function feedbackPost(Request $request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'uname'              => 'required',
        'email'              => 'required|email',
        'phone'              => 'required|min:10|max:10',
        'branch'             => 'required',
        'file'               => 'nullable',
        'msg'                => 'required'
      ],
      [
        'required' => 'The :attribute field is required',
        'email'    => 'This is not a valid email format',
        'phone.min' => 'Phone Number has to be :min chars long',
        'phone.max' => 'Phone Number can be maximum :max chars long',
      ]
    );

    if ($validator->fails()) {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $uname = trim($request->uname);
      $email = trim($request->email);
      $feedback_id = trim($request->feedback_id);
      $phone = trim($request->phone);
      $branch = trim($request->branch);
      $msg = trim($request->msg);

      if ($request->hasFile('file')) :
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/feedback', $filename);
      //$image = $filename;
      endif;
      if (!empty($filename)) {
        $file_name = $filename;
      } else {
        $file_name = "";
      }

      $feedback = Feedback::create([
        'feedback_id'=>$feedback_id,
        'fullname'=>$uname,
        'phone'=>$phone,
        'email'=>$email,
        'branch'=>$branch,
        'messages'=>$msg,
        'attachment'=>$file_name
      ]);

      if ($feedback != null) {
        
        $data['full_name']=$uname;
        $data['emailId']=$email;
        $data['phone']=$phone;
        $data['branch']=$branch;
        $data['feedback_id']=$feedback_id;
        $data['messages']=$msg;
        

        Mail::send('email.feedback-admin-email', $data, function($message) use ($data)
        {
            $message->from('no-reply@rccb.com', "RCCB");
            $message->subject("Feedback - RCCB");
            $message->to('prasun@matrixnmedia.com');
        });
        
        $successMsg = 'Your message has been sent. Thank you!';
        return Redirect::back()
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
}
