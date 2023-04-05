@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">TYPE</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">TYPE Management</li>
    </ol>

    <div class="card mt-4">
        <div class="card-header">
        TYPE Listing <a href="{{ url('admin/add-type') }}" class="btn btn-primary btn-sm float-end">
                Add Type </a>
        </div>
        <div class="card-body">
            <!-- @if( session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif -->
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
                        <th>Name(English)</th>
                        <th>Name(Bengali)</th>
                        <th>Icon</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if( count($cmsList) > 0 )
                    @foreach( $cmsList as $key=>$val )
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $val->name }} </td>
                        <td> {{ $val->nameBengali }} </td>
                        <td>
                            @if($val->fileName)
                            <img src="{{ asset('uploads/typeicon/'.$val->fileName) }}" alt="{{ $val->fileName }}" width="50" height="50"> </img>
                            @else
                            N.A
                            @endif
                        </td>
                        <td> <a href="{{ url('admin/edit-type/'. $val->id) }}" class="btn btn-success"> Edit </a> | <a href="{{ url('admin/delete-type/'. $val->id) }}" class="btn btn-danger" onclick="return confirm('Are you want to delete this cms?');"> Delete </a>
                        </td>

                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection