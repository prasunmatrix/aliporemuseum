<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Location;
use App\Models\Type;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;

class LocationManageController extends Controller
{
  
    function __construct()
    {
       $this->middleware('permission:manage-cms,admin', ['only' => ['index','store','create', 'edit','update', 'delete']]);
    }

  public function index()
  {
    $this->data['page_title'] = 'Admin | LOCATION';
    $cmsList = Location::where('is_deleted','0')->get();
    $this->data['cmsList']=$cmsList;
    return view('admin.location.index', $this->data);
  }
  public function create()
  {
    $this->data['page_title'] = 'Admin | Add LOCATION';
    $this->data['panel_title'] = 'Admin Add LOCATION';

    $type = Type::where('is_deleted', '0')->get();
    $this->data['type'] = $type;

    return view('admin.location.create',$this->data);
  }
  public function store(Request $request){
    //dd($request->all());  
    $validator = Validator::make($request->all(), 
    [
      'name'            => 'required|string|max:200',
      'nameBengali'     => 'nullable',
      'latitude'        => 'required|string|max:200',
      'longitude'       => 'required',
      'type'            => 'nullable',
      'is_favourite'    => 'nullable',
      'status'          => 'nullable'
    ],
    [      
      'required' => 'The :attribute field is required',
      'name.max' => 'name can be maximum :max chars long',
    ]);
    if ($validator->fails()) 
    {
        /*echo 'Failed';
        exit();*/
        return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
    } 
    else 
      {
        //$page_slug=$request->slug;
         
        $name= $request->name;
        $nameBengali= $request->nameBengali;
        $latitude = $request->latitude;
        $longitude = $request->longitude;

        $type         = $request->type;
        $is_favourite = $request->is_favourite == true ? '1' : '0';

      $cms = Location::create([
        'name'=>$name,
        'nameBengali'=>$nameBengali,
        'latitude'=>$latitude,
        'longitude'=>$longitude,
        'type'=>$type,
        'is_favourite'=>$is_favourite
      ]);
      if ($cms != null) {
          
          $successMsg = 'LOCATION Added Successfully';
          return Redirect('admin/location')
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
  public function edit($cms_id)
  {
    $this->data['page_title'] = 'Admin | Update Location';
    $cms = Location::find($cms_id);
    $this->data['cms']=$cms;

    $type = Type::where('is_deleted', '0')->get();
    $this->data['type'] = $type;

    return view('admin.location.edit', $this->data);
  }
  public function update(Request $request, $cms_id)
  {
    //dd($cms_id);
    $validator = Validator::make($request->all(), 
    [
      'name'            => 'required|string|max:200',
      'nameBengali'     => 'nullable',
      'latitude'        => 'required|string|max:200',
      'longitude'       => 'required',
      'type'            => 'nullable',
      'is_favourite'    => 'nullable',
      'status'          => 'nullable'
    ],
    [      
      'required' => 'The :attribute field is required',
      'name.max' => 'name can be maximum :max chars long',
    ]);
    if ($validator->fails()) 
    {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    }
    else
    {
      $name= $request->name;
      $nameBengali= $request->nameBengali;
      $latitude = $request->latitude;
      $longitude = $request->longitude;

      $type         = $request->type;
      $is_favourite = $request->is_favourite == true ? '1' : '0';

      $cmsUpdate = Location::where('id',$cms_id)->update([
        'name'=>$name,
        'nameBengali'=>$nameBengali,
        'latitude'=>$latitude,
        'longitude'=>$longitude,
        'type'=>$type,
        'is_favourite'=>$is_favourite
      ]);
      if ($cmsUpdate != null) {
          
          $successMsg = 'LOCATION Update Successfully';
          return Redirect('admin/location')
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
  public function delete($cms_id)
  {
    $deleted_by = Auth::guard('admin')->user()->id;
    $deleteCategory = Location::where('id', $cms_id)->update([
      'is_deleted' =>'1'
    ]);                                                
    $successMsg="Location deleted successfully!";
    return Redirect::back()
    ->withSuccess($successMsg);  
  }
}
