<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use DB;
use Validator;

class ProductController extends Controller
{
  public function personalLoan()
  {
    return view('frontend.products.personalloan');
  }
  public function homeLoan()
  {
    return view('frontend.products.homeloan');
  }
  public function carLoan()
  {
    return view('frontend.products.carloan');
  }
  public function eccsLoan()
  {
    return view('frontend.products.eccsloan');
  }
  public function cashCreditLoan()
  {
    return view('frontend.products.cashcreditloan');
  }
  public function savingsAccount()
  {
    return view('frontend.products.savingsaccount');
  }
  public function currentAccount()
  {
    return view('frontend.products.currentaccount');
  }
}
