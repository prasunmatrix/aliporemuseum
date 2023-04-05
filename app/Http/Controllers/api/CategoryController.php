<?php

namespace App\Http\Controllers\api;

use \App\Category;
use \App\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Helpers\ApiHelper;
use \Auth;
use \Response;
use \Helper;
use \Validator;
use \Hash;
use Image;
use App;

class CategoryController extends Controller
{
    /**
        * Function Name :  getCategoryList
        * Purpose       :  Fetch CategoryList.
        * Author        :
        * Created Date  :  2020-11-03
        * Input Params  :  
        * Return Value  :  flag,details
	*/  
	public function getCategoryList(request $request)  
	{  
		$data['category_info'] = Category::get();
		if(count($data['category_info'])>0){
					$resultarray=array(
					  'flag'=>"true",              
					  'details'=>$data['category_info']
					);
		}else{
					$resultarray=array(
					  'flag'=>"false",              
					  'details'=>'No data Found'
					);
		}
		echo json_encode($resultarray);
	}
	
	/**
        * Function Name :  getSubCategorybyCategoryId
        * Purpose       :  Fetch SubCategory.
        * Author        :
        * Created Date  :  2020-11-03
        * Input Params  :  id
        * Return Value  :  flag,details
	*/ 
	public function getSubCategorybyCategoryId(request $request)  
	{
		$id=$request->input('category_id');
		
		if($id=='')
		{
			$resultarray=array(
			  'flag'=>"false",              
			  'details'=>'Missing Parameters'
			);
		}
		else
		{
			$data['subcategory_info'] = SubCategory::where('category_id',$id)->get();
			if(count($data['subcategory_info'])>0){
						$resultarray=array(
						  'flag'=>"true",              
						  'details'=>$data['subcategory_info']
						);
			}else{
						$resultarray=array(
						  'flag'=>"false",              
						  'details'=>'No data Found'
						);
			}
		}	
		echo json_encode($resultarray);
	}
  
}
