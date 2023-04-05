<?php

namespace App\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Hash;

class SubadminController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
       $this->middleware('permission:manage-subadmin,admin', ['only' => ['index','postSettings']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->data['page_title'] = 'Admin | Subadmin';
        $this->data['admin'] = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.subadmin.index', $this->data);

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page_title'] = 'Admin | Permission';
        $this->data['roles'] = Role::pluck('name','name')->all();
        return view('admin.subadmin.create', $this->data);

   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
      
        $input['password'] =trim($request->get('password'));       
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('admin.subadmin')
            ->with('success', 'Subadmin created successfully.');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title= 'Admin | Subadmin'; 
        $subadmin = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $subadmin->roles->pluck('name', 'name')->all();    
        return view('admin.subadmin.edit', compact('page_title','subadmin', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'roles' => 'required'
        ]);
    
        $input = $request->all();
    
        $user = User::find($id);
        $user->update($input);

        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();
    
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.subadmin')
            ->with('success', 'Subadmin updated successfully.');
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('admin.subadmin')
            ->with('success', 'Subadmin deleted successfully.');
    }
}