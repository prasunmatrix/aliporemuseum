<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Validator;

class InterestRatesController extends Controller
{
  public function index()
  {       
    return view('frontend.interestrates.index');    
  }
}
