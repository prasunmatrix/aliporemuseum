<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventCalendar;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;

class EventCalendarController extends Controller
{
  function __construct()
  {
    $this->middleware('permission:manage-eventcalendar,admin', ['only' => ['index','postSettings']]);
  }
  
  public function index()
  {
    $this->data['page_title'] = 'Admin | Event Calendar';
    $this->data['eventcalendar']=EventCalendar::orderBy('id', 'DESC')->first();
    return view('admin.eventcalendar.event_calendar', $this->data);
  }
  public function postEventCalendar(Request $request)
  {
    //dd($request->all());
    $validator = Validator::make($request->all(), 
    [
      'content_data' => 'required',
    ],
    [      
      'required' => 'The :attribute field is required',
      
    ]);
    if ($validator->fails()) {      
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    }
    else
    {
      $count=EventCalendar::count();
      if($count==0)
      { 
        $eventcalendar=EventCalendar::create([
          'content'=>$request->content_data
        ]);
        if ($eventcalendar != null) {          
          $successMsg = 'Event Calendar Updated Successfully';
          return Redirect('admin/event-calendar')
                  ->withSuccess($successMsg);    
        }
      }
      else
      {
        $eventcalendar_id=$request->eventcalendar_id;
        $eventcalendarUpdate=EventCalendar::where('id',$eventcalendar_id)->update([
          'content'=>$request->content_data
        ]);
        if ($eventcalendarUpdate != null) {          
          $successMsg = 'Event Calendar Updated Successfully';
          return Redirect('admin/event-calendar')
                  ->withSuccess($successMsg);    
        }
      }
    }    
  }
}
