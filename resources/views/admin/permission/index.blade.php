@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Permission</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Permission Management</li>
    </ol>

    <div class="card mt-4">
        <div class="card-header">
            Permission Listing <a href="{{ url('admin/add-permission') }}" class="btn btn-primary btn-sm float-end">
                Add Permission </a>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $i=1; ?>
                   
                    @foreach( $permission as $val )                    
                    <tr>
                        <td> {{ $i }} </td>
                        <td> {{ $val->name }} </td>                       
                        
                        <td> <a href="{{ url('admin/edit-permission/'. $val->id) }}" class="btn btn-success"> Edit </a> | <a href="{{ url('admin/delete-permission/'. $val->id) }}" class="btn btn-danger" onclick="return confirm('Are you want to delete this Permission ?');"> Delete </a>
                        </td>
                    </tr>
                    <?php  $i++;?>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection