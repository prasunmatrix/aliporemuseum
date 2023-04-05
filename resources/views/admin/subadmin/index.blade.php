@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Subadmin</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Subadmin Management</li>
    </ol>

    <div class="card mt-4">
        <div class="card-header">
            Subadmin Listing <a href="{{ url('admin/add-subadmin') }}" class="btn btn-primary btn-sm float-end">
                Add Subadmin </a>
        </div>
        <div class="card-body">         
            @if(Session::has('success'))
              <div class="alert alert-success alert-dismissable __web-inspector-hide-shortcut__">                      
                  <span style="color:green;">{{ Session::get('success') }}</span>
              </div>
            @endif
            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissable">
                  <span style="color:red;">{{ Session::get('error') }}</span>
              </div>
            @endif
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>   
                        <th>Email</th>                       
                        <th>Role</th>  
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>                    
                   <?php $i=1; ?>
                    @foreach( $admin as $val )
                    
                    <tr>
                        <td> {{ $i }} </td>
                        <td> {{ $val->name }} </td>
                        <td> {{ $val->email }} </td>
                        <td>                            
                            @if(!empty($val->getRoleNames()))
                            @foreach($val->getRoleNames() as $value)
                            <label class="badgez badge-darkz">{{ $value }}</label>
                            @endforeach
                            @endif
                        </td>
                        
                        
                        <td> <a href="{{ url('admin/edit-subadmin/'. $val->id) }}" class="btn btn-success"> Edit </a> | <a href="{{ url('admin/delete-subadmin/'. $val->id) }}" class="btn btn-danger" onclick="return confirm('Are you want to delete this Subadmin ?');"> Delete </a>
                        </td>

                    </tr>
                    <?php $i++ ?>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection