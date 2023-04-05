<?php

namespace App\Http\Controllers\api;

use \App\Cms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Helpers\ApiHelper;
use App\Models\Location;
use App\Models\Type;
use App\Models\Audiofile;
use \Auth;
use \Response;
use \Helper;
use \Validator;
use \Hash;
use Image;
use App;

use URL;
use Session;
use Redirect;
use Input;

class AudioController extends Controller
{
	public function favouriteLocationList(request $request)  
	{  
		$data['location_info'] = Location::where('is_favourite','1')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		
		for($i=0; $i<count($data['location_info']); $i++)
		{
			$data['location_info'][$i]['type'] = Type::where('id', $data['location_info'][$i]['type'])->first();
		}

		if(count($data['location_info'])>0)
		{
			$resultarray=array(
				'flag'=>"true",    
				'status'=>"200",   
				'message'=>"Favourite location list found", 	      
				'details'=>$data['location_info']
			);
		}
		else
		{
			$resultarray=array(
				'flag'=>"false",  
				'status'=>"501",            
				'details'=>'No data Found'
			);
		}
		echo json_encode($resultarray);
	}


	public function locationFetch(request $request)  
	{  
		$typeId=$request->input('typeId');
		if($typeId)
		{
			$data['location_info'] = Location::where('type',$typeId)->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
		else
		{
			$data['location_info'] = Location::where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}

		for($i=0; $i<count($data['location_info']); $i++)
		{
			$data['location_info'][$i]['type'] = Type::where('id', $data['location_info'][$i]['type'])->first();
		}
		
		if(count($data['location_info'])>0)
		{
			$resultarray=array(
				'flag'=>"true",    
				'status'=>"200",   
				'message'=>"Location list found", 	      
				'details'=>$data['location_info']
			);
		}
		else
		{
			$resultarray=array(
				'flag'=>"false",  
				'status'=>"501",            
				'details'=>'No data Found'
			);
		}
		echo json_encode($resultarray);
	}

	public function audioFetch(request $request)  
	{  
		$data=[];
		$data['english_audio_info'] = Audiofile::where('is_deleted','0')->orderBy('id', 'ASC')->select('name','fileName','id','status','is_deleted','created_at')->get();
		$data['bengali_audio_info'] = Audiofile::where('is_deleted','0')->orderBy('id', 'ASC')->select('bengliName','bengaliFile','id','status','is_deleted','created_at')->get();
		if(count($data)>0)
		{
			$baseurlEng=url("uploads/audio");
			$baseurlBeng=url("uploads/bengaliAudio");

			$resultarray=array(
				'flag'=>"true",    
				'status'=>"200",   
				'message'=>"Audio list found", 	 
				'base_url_english'=>$baseurlEng,
				'base_url_bengali'=>$baseurlBeng,      
				'details'=>$data
			);
		}
		else
		{
			$resultarray=array(
				'flag'=>"false",  
				'status'=>"501",            
				'details'=>'No data Found'
			);
		}
		echo json_encode($resultarray);
	}
		
	public function typeList(request $request)
	{
		$data['type_info'] = Type::where('is_deleted','0')->orderBy('id', 'ASC')->get();
		if(count($data['type_info'])>0)
		{
			$baseurl=url("uploads/typeicon");

			$resultarray=array(
				'flag'=>"true",    
				'status'=>"200",   
				'message'=>"Type list found", 	 
				'base_url'=>$baseurl,     
				'details'=>$data['type_info']
			);
		}
		else
		{
			$resultarray=array(
				'flag'=>"false",  
				'status'=>"501",            
				'details'=>'No data Found'
			);
		}
		echo json_encode($resultarray);
	}
	
}
