<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\{PhotoGallery,Category,PhotoGalleryImage};
use App\Models\PhotoGalleryImage;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;
use App\Traits\ImageUpload;
use DB;

class PhotoGalleryController extends Controller
{

   function __construct()
    {
       $this->middleware('permission:manage-photo-gallery,admin', ['only' => ['index','store','create', 'edit','update', 'delete']]);
    }
  public function index()
  {
    $this->data['page_title'] = 'Admin | Photo Gallery';
    $photoGalleryList = PhotoGalleryImage::where('is_deleted','0')->get();
    $this->data['photoGalleryList']=$photoGalleryList;
    return view('admin.photogallery.index', $this->data);
  }
  public function create()
  {
    $this->data['page_title'] = 'Admin | Photo Gallery';
    $this->data['panel_title'] = 'Admin Photo Gallery';
    $categoryList =  DB::select('select * from gallery_category');
    $this->data['categoryList']=$categoryList;
    return view('admin.photogallery.create',$this->data);
  }
  public function store(Request $request)
  {
    
    $validator = Validator::make($request->all(), 
    [      
      'galley_images'     => 'required',
      'galley_images.*'   => 'image|mimes:jpg,jpeg,png,gif|max:2048',
      'status'            => 'nullable'
    ],
    [      
      'required' => 'The :attribute field is required',      
      'galley_images.mimes'=>'Image should be jpeg,png,jpg,gif types', 
    ]);
    if ($validator->fails()) {
      
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    } else {      
        if($request->file('galley_images')) {
          $gallery_category_id = $request->gallery_category_id;
          $files=$request->file('galley_images');
          foreach($files as $key=>$file){
              $file_name =time().'-'.$key;
              $extension = $file->getClientOriginalExtension();
              $fullFileName = $file_name.'.'.$extension; 
              $destinationPath = public_path().'/uploads/gallery';
              $uploadResponse= $file->move($destinationPath,$fullFileName); 

              $photoGalleryImage=PhotoGalleryImage::create([               
                'gallery_category_id' => $gallery_category_id,
                'image'=>$fullFileName
              ]);    
          }       
        $successMsg = 'Photo Gallery Added Successfully';
          return Redirect('admin/photogallery')
                  ->withSuccess($successMsg);
      }
      else
      {
        $errMsg = array();
          $errMsg['registrationerror'] = 'Something went wrong, please try again';
          return Redirect::back()
                  ->withErrors($errMsg)
                  ->withInput();
      }  
    }  
  }
  public function edit($photogallery_id)
  {
    $this->data['page_title'] = 'Admin | Update Photogallery';
    $photogallery = PhotoGalleryImage::find($photogallery_id);   
    $this->data['photogallery']=$photogallery;       
    $categoryList =  DB::select('select * from gallery_category');
    $this->data['categoryList']=$categoryList;
    return view('admin.photogallery.edit', $this->data);
  }
  public function update(Request $request,$photogallery_id)
  {
    
    $validator = Validator::make($request->all(), 
    [
      'title'             => 'required|string|max:200',            
      'galley_images.*'   => 'image|mimes:jpg,jpeg,png,gif|max:2048',
      'status'            => 'nullable'
    ],
    [      
      'required' => 'The :attribute field is required',
      'title.max' => 'title can be maximum :max chars long',
      'galley_images.mimes'=>'Image should be jpeg,png,jpg,gif types', 
    ]);
    if ($validator->fails()) {
      return Redirect::back()
                  ->withErrors($validator)
                  ->withInput();
    }
    else
    {
      $title= $request->title;
      $short_desc = $request->short_desc;
      $long_desc= $request->long_desc;
      $gallery_category_id = $request->gallery_category_id;
      $status = $request->status == true ? '1' : '0';

       $gallery_old_image=$request->gallery_old_image;

      if ($request->hasFile('image')) :
          $file = $request->file('image');
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path().'/uploads/gallery', $filename);
          //$image = $filename;
      endif;
      if(!empty($filename) && File::exists(public_path("uploads/gallery/".$gallery_old_image)))
      {
        File::delete(public_path("uploads/gallery/".$gallery_old_image));
      }
      
      if(!empty($filename))
      {
        $image=$filename;
        
      }
      else
      {
        $image=$gallery_old_image;
      }

      $photoGallery=PhotoGalleryImage::where('id',$photogallery_id)->update([
        'gallery_category_id'=>$gallery_category_id,
        'image'=>$image,
        'title'=>$title,
        'short_desc'=>$short_desc,
        'long_desc'=>$long_desc,
        'status'=>$status  
      ]);
      
      if($photoGallery!=null)
      {
        $successMsg = 'Photo Gallery updated Successfully';
          return Redirect('admin/photogallery')
                  ->withSuccess($successMsg);
      }
      else
      {
        $errMsg = array();
          $errMsg['error'] = 'Something went wrong, please try again';
          return Redirect::back()
                  ->withErrors($errMsg)
                  ->withInput();

      }
    }
  }
 
  public function delete($photogallery_id)
  {
    
    $deletePhotoGallery = PhotoGalleryImage::where('id', $photogallery_id)->update([
      'is_deleted' =>'1',
    ]);                                                
    $successMsg="Photo Gallery deleted successfully!";
    return Redirect::back()
    ->withSuccess($successMsg);  
  }
}
