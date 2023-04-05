<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Validator;

class AboutUsController extends Controller
{
  public function index()
  {       
    return view('frontend.aboutus.index');    
  }
  public function profile()
  {       
    return view('frontend.aboutus.profile');    
  }
  public function structure()
  {       
    return view('frontend.aboutus.structure');    
  }
  public function business()
  {       
    return view('frontend.aboutus.business');    
  }
  public function technology()
  {       
    return view('frontend.aboutus.technology');    
  }
  public function whyRccbLtd()
  {       
    return view('frontend.aboutus.whyrccbltd');    
  }
  public function mission()
  {       
    return view('frontend.aboutus.mission');    
  }
}
