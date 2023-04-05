<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Branch, District, EventCalendar};
use Redirect;
use DB;

class BranchController extends Controller
{

  public function index()
  {
     $district = District::where('is_deleted', '0')->where('status', '1')->get();
    $branch = Branch::join('district', 'district.id', '=', 'branch_details.district')
      ->select('branch_details.*', 'district.district_name')
      ->where('branch_details.is_deleted', '0')->where('branch_details.status', '1')->get();
    return view('frontend.services.branch')
      ->with('branch', $branch)
      ->with('district', $district);
  }

  public function knowledgeCorner()
  {

    return view('frontend.services.knowledgecorner');
  }
  public function eventCalendar()
  {
    $eventcalendar = EventCalendar::orderBy('id', 'DESC')->first();
    return view('frontend.services.eventcalendar')
      ->with('eventcalendar', $eventcalendar);
  }

  
  public function getBranchByDestrict(Request $request)
  {  
    $data['list'] = Branch::where('district', $request->dist_id)->get();
    return response()->json($data);
  }

  // public function getBranchByBlock(Request $request)
  // {  
  //   $data['list'] = Branch::where('id', $request->id)->get();
  //   return response()->json($data);
  // }
  public function getBranchByBranch(Request $request)
  {  
    $data['list'] = Branch::where('id', $request->id)->get();
    return response()->json($data);
  }
}
