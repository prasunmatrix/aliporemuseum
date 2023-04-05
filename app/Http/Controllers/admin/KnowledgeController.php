<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\KnowledgeCorner;
use Illuminate\Support\Facades\File;
use Validator;
use Auth;
use Redirect;


class KnowledgeController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:manage-knowledge-corner,admin', ['only' => ['index','store','create', 'edit','update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->data['page_title'] = 'Admin | Knowledge Corner';
        $this->data['list'] = KnowledgeCorner::orderBy('id', 'desc')->where('is_deleted', '0')->paginate(10);
        return view('admin.knowledgecorner.index', $this->data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page_title'] = 'Admin | Knowledge Corner';
        return view('admin.knowledgecorner.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name'              => 'required|string|max:200',
                'file' => "required|mimes:pdf|max:10000",
                'status'            => 'nullable'
            ],
            [
                'required' => 'The :attribute field is required',
                'name.max' => 'name can be maximum :max chars long',
            ]
        );
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $name = $request->name;

            if ($request->hasFile('file')) :
                $file = $request->file('file');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/uploads/knowledgecorner', $filename);
            
            endif;
            if (!empty($filename)) {
                $file = $filename;
            } else {
                $file = "";
            }           
            $status = $request->status == true ? '1' : '0';
            $created_by = Auth::guard('admin')->user()->id;

            $knowledge = KnowledgeCorner::create([
                'name' => $name,                
                'file' => $file,                
                'status' => $status,
                'created_by' => $created_by
            ]);
            if ($knowledge != null) {

                $successMsg = 'Knowledge Corner Added Successfully';
                return Redirect('admin/knowledge-corner')
                    ->withSuccess($successMsg);
            } else {
                $errMsg = array();
                $errMsg['error'] = 'Something went wrong, please try again';
                return Redirect::back()
                    ->withErrors($errMsg)
                    ->withInput();
            }
        }
    }

    public function edit($id)
    {
      $this->data['page_title'] = 'Admin | Edit Knowledge Corner';
      $corner = KnowledgeCorner::find($id);
      $this->data['corner']=$corner;
      return view('admin.knowledgecorner.edit', $this->data);
    }

    public function update(Request $request, $id)
    {
        
      $validator = Validator::make($request->all(), 
      [
        'name'              => 'required|string|max:200',        
        'file'             => 'nullable|mimes:pdf|max:10000',        
        'status'            => 'nullable'
      ],
      [      
        'required' => 'The :attribute field is required',
        'name.max' => 'name can be maximum :max chars long',        
      ]);
      if ($validator->fails()) {        
        return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
      }
      else
      {
        $name= $request->name;        
        $old_file=$request->old_file;  
        if ($request->hasFile('file')) :
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path().'/uploads/knowledgecorner', $filename);
        endif;
        if(!empty($filename) && File::exists(public_path("uploads/knowledgecorner/".$old_file)))
        {
           File::delete(public_path("uploads/knowledgecorner/".$old_file));
        }
        
        if(!empty($filename))
        {
          $file=$filename;          
        }
        else
        {
          $file=$old_file;
        }
        
        $status = $request->status == true ? '1' : '0';
        $updated_by = Auth::guard('admin')->user()->id;
  
        $knowledge = KnowledgeCorner::where('id',$id)->update([
          'name'=>$name,          
          'file'=>$file,          
          'status'=>$status,
          'created_by'=>$updated_by 
        ]);
        if ($knowledge != null) {
            
            $successMsg = 'Knowledge Corner Update Successfully';
            return Redirect('admin/knowledge-corner')
                    ->withSuccess($successMsg);
            
        } else {
            $errMsg = array();
            $errMsg['error'] = 'Something went wrong, please try again';
            return Redirect::back()
                    ->withErrors($errMsg)
                    ->withInput();
        }
      }
    }

    public function destroy($id)
    {
      $deleted_by = Auth::guard('admin')->user()->id;
      $deleteCorner = KnowledgeCorner::where('id', $id)->update([
        'is_deleted' =>'1',
        'deleted_by'=>$deleted_by
      ]);                                                
      $successMsg="Knowledge corner deleted successfully!";
      return Redirect::back()
      ->withSuccess($successMsg);  
    }   
}
