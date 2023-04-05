<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KnowledgeCorner;
use App\Models\{OrganisationChart,Tender,Notice};
use Redirect;
use DB;
use Validator;

class ServiceController extends Controller
{

  public function knowledgeCorner()
  {   
    $list = KnowledgeCorner::orderBy('id', 'desc')->where('is_deleted', '0')->where('status', '1')->get();
    return view('frontend.services.knowledgecorner')
    ->with('knowledgeList', $list);
  }
  public function notice()
  {   
    $list = Notice::orderBy('id', 'desc')->where('is_deleted', '0')->where('status', '1')->get();
    return view('frontend.services.notice')
    ->with('noticeList', $list);
  }
  public function organisationChart(){
    $chart = OrganisationChart::orderBy('id', 'desc')->where('is_deleted', '0')->where('status', '1')->get();
    return view('frontend.services.organisationchart')
    ->with('chart', $chart);

  }
  public function emiCalculator(){
    //return view('frontend.services.emicalculator');
    return view('frontend.services.emicalculatornew');
  }
  // public function emiCalculatorNew(){
  //   return view('frontend.services.emicalculatornew');
  // }
  public function tender(Request $request){
    //dd($request->all());
    $tender = Tender::orderBy('id', 'desc')->where('is_deleted', '0')->where('status', '1')->get();
    if($request->all())
    {
    $validator = Validator::make(
      $request->all(),
      [
        'frm_date'          => 'required|date',
        'to_date'           => 'required|date|after_or_equal:frm_date',
      ],
      [
        'required' => 'The :attribute field is required',
      ]
    );
    if ($validator->fails()) {
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    }
    else
    {
      //dd($request->all());
      $tender=Tender::orderBy('id', 'desc')->where('is_deleted', '0')->where('status', '1')->whereBetween('tender_date', [$request->frm_date, $request->to_date])->get();
    }
  }
    return view('frontend.services.tender')
    ->with('tender', $tender)
    ->with('request', $request);
    
  }
  public function neftRtgs()
  {   
    return view('frontend.services.neftrtgs');
  }
  public function safeDeposit()
  {   
    return view('frontend.services.safedeposit');
  }
}
