<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Audiofile;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Validator;

class AudioManageController extends Controller
{

  function __construct()
  {
    $this->middleware('permission:manage-cms,admin', ['only' => ['index', 'store', 'create', 'edit', 'update', 'delete']]);
  }

  public function index()
  {
    $this->data['page_title'] = 'Admin | AUDIO';
    $cmsList = Audiofile::where('is_deleted', '0')->get();
    $this->data['cmsList'] = $cmsList;
    return view('admin.audio.index', $this->data);
  }
  public function create()
  {
    $this->data['page_title'] = 'Admin | Add AUDIO';
    $this->data['panel_title'] = 'Admin Add AUDIO';
    return view('admin.audio.create', $this->data);
  }
  public function store(Request $request)
  {
    //dd($request->all());  
    $validator = Validator::make(
      $request->all(),
      [
        'name'              => 'nullable|string|max:500',
        'bname'              => 'nullable|string|max:500',
        'audiofile'         => 'nullable|mimes:audio/mpeg,mpga,mp3,wav,aac |max:500000',
        'bengalifile'       => 'nullable|mimes:audio/mpeg,mpga,mp3,wav,aac |max:500000',
        'status'            => 'nullable'
      ],

      [
       // 'required' => 'The :attribute field is required',
        'name.max' => 'name can be maximum :max chars long',
        'bname.max' => 'name can be maximum :max chars long',
        /*'audiofile.mimes' => 'Allow mp3 only',
      'audiofile.max'   => 'FIle should be less than 4 MB'*/
      ]
    );
    if ($validator->fails()) {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $name = $request->name;
      $bengliName=$request->bname;
      if ($request->hasFile('audiofile')) :
        $file = $request->file('audiofile');
        $filename = 'hindi'.time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/audio', $filename);
      //$image = $filename;
      endif;
      if (!empty($filename)) {
        $image = $filename;
      } else {
        $image = "";
      }
      if ($request->hasFile('bengalifile')) :
        $file = $request->file('bengalifile');
        $bfilename = 'beng'.time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/bengaliAudio', $bfilename);
      endif;
      if (!empty($bfilename)) {
        $bimage = $bfilename;
      } else {
        $bimage = "";
      }
      $cms = Audiofile::create([
        'name' => $name,
        'bengliName'=>$bengliName,
        'fileName' => $image,
        'bengaliFile'=>$bimage
      ]);
      if ($cms != null) {

        $successMsg = 'AUDIO Added Successfully';
        return Redirect('admin/audio')
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
    $this->data['page_title'] = 'Admin | Update Audio';
    $cms = Audiofile::find($cms_id);
    $this->data['cms'] = $cms;
    return view('admin.audio.edit', $this->data);
  }
  public function update(Request $request, $cms_id)
  {
    //dd($cms_id);
    $validator = Validator::make(
      $request->all(),
      [
        'name'              => 'nullable|string|max:500',
        'bname'              => 'nullable|string|max:500',
        'status'            => 'nullable'
      ],
      [
       // 'required' => 'The :attribute field is required',
        'name.max' => 'name can be maximum :max chars long',
        'bname.max' => 'name can be maximum :max chars long',
      ]
    );
    if ($validator->fails()) {
      /*echo 'Failed';
      exit();*/
      return Redirect::back()
        ->withErrors($validator)
        ->withInput();
    } else {
      $name = $request->name;
      $bengliName=$request->bname;
      $cms_old_audiofile = $request->cms_old_audiofile;
      $cms_old_bengaliaudiofile = $request->cms_old_bengalifile;

      if ($request->hasFile('audiofile')) :
        $file = $request->file('audiofile');
        $filename = 'hindi'.time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/audio', $filename);
      //$image = $filename;
      endif;
      if (!empty($filename) && File::exists(public_path("uploads/audio/" . $cms_old_audiofile))) {
        File::delete(public_path("uploads/audio/" . $cms_old_audiofile));
      }

      if (!empty($filename)) {
        $image = $filename;
        //dd($image);
      } else {
        $image = $cms_old_audiofile;
      }
      if ($request->hasFile('bengalifile')) :
        $file = $request->file('bengalifile');
        $bfilename = 'beng'.time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/bengaliAudio', $bfilename);
      endif;
      if (!empty($bfilename) && File::exists(public_path("uploads/bengaliAudio/" . $cms_old_bengaliaudiofile))) {
        File::delete(public_path("uploads/bengaliAudio/" . $cms_old_bengaliaudiofile));
      }
      if (!empty($bfilename)) {
        $bimage = $bfilename;
      } else {
        $bimage = $cms_old_bengaliaudiofile;
      }

      $cmsUpdate = Audiofile::where('id', $cms_id)->update([
        'name' => $name,
        'bengliName'=>$bengliName,
        'fileName' => $image,
        'bengaliFile'=>$bimage
      ]);
      if ($cmsUpdate != null) {

        $successMsg = 'AUDIO Update Successfully';
        return Redirect('admin/audio')
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
    $deleteCategory = Audiofile::where('id', $cms_id)->update([
      'is_deleted' => '1'
    ]);
    $successMsg = "AUDIO deleted successfully!";
    return Redirect::back()
      ->withSuccess($successMsg);
  }
}
