<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Audiofile;
use App\Models\Type;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;

class TypeManageController extends Controller
{
  
    function __construct()
    {
       $this->middleware('permission:manage-cms,admin', ['only' => ['index','store','create', 'edit','update', 'delete']]);
    }

  public function index()
  {
    $this->data['page_title'] = 'Admin | TYPE';
    $cmsList = Type::where('is_deleted','0')->get();
    $this->data['cmsList']=$cmsList;
    return view('admin.type.index', $this->data);
  }
  public function create()
  {
    $this->data['page_title'] = 'Admin | Add TYPE';
    $this->data['panel_title'] = 'Admin Add TYPE';
    return view('admin.type.create',$this->data);
  }
  public function store(Request $request){
    //dd($request->all());  
    $validator = Validator::make($request->all(), 
    [
      'name'              => 'required|string|max:200',
      'nameBengali'          => 'nullable',
      'iconfile'          => 'nullable',
    ],
   
    [      
      'required' => 'The :attribute field is required',
      'name.max' => 'name can be maximum :max chars long',
      /*'audiofile.mimes' => 'Allow mp3 only',
      'audiofile.max'   => 'FIle should be less than 4 MB'*/
    ]);
    if ($validator->fails()) {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    } else 
    {
      $name= $request->name;
      $nameBengali= $request->nameBengali;

      if ($request->hasFile('iconfile')) :
          $file = $request->file('iconfile');
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path().'/uploads/typeicon', $filename);
          //$image = $filename;
      endif;
      if(!empty($filename))
      {
        $image = $filename;
      }
      else
      {
        $image="";
      }

      $cms = Type::create([
        'name'=>$name,
        'nameBengali'=>$nameBengali,
        'fileName'=>$image
      ]);
      if ($cms != null) {
          
          $successMsg = 'TYPE Added Successfully';
          return Redirect('admin/type')
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
    $this->data['page_title'] = 'Admin | Update Type';
    $cms = Type::find($cms_id);
    $this->data['cms']=$cms;
    return view('admin.type.edit', $this->data);
  }
  public function update(Request $request, $cms_id)
  {
    //dd($cms_id);
    $validator = Validator::make($request->all(), 
    [
      'name'              => 'required|string|max:200',
      'nameBengali'          => 'nullable',
      'iconfile'          => 'nullable',
    ],
    [      
      'required' => 'The :attribute field is required',
      'name.max' => 'name can be maximum :max chars long',
    ]);
    if ($validator->fails()) {
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
      $cms_old_iconfile=$request->cms_old_iconfile;

      if ($request->hasFile('iconfile')) :
          $file = $request->file('iconfile');
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path().'/uploads/typeicon', $filename);
          //$image = $filename;
      endif;
      if(!empty($filename) && File::exists(public_path("uploads/typeicon/".$cms_old_iconfile)))
      {
        File::delete(public_path("uploads/typeicon/".$cms_old_iconfile));
      }
      
      if(!empty($filename))
      {
        $image=$filename;
        //dd($image);
      }
      else
      {
        $image=$cms_old_iconfile;
      }
     

      $cmsUpdate = Type::where('id',$cms_id)->update([
        'name'=>$name,
        'nameBengali'=>$nameBengali,
        'fileName'=>$image
      ]);
      if ($cmsUpdate != null) {
          
          $successMsg = 'TYPE Update Successfully';
          return Redirect('admin/type')
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
    $deleteCategory = Type::where('id', $cms_id)->update([
      'is_deleted' =>'1'
    ]);                                                
    $successMsg="TYPE deleted successfully!";
    return Redirect::back()
    ->withSuccess($successMsg);  
  }
}
