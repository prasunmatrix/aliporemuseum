@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Notice</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Notice</li>
    </ol>
    <div class="container-fluid px-4">

        <div class="card mt-4">
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

                <form method="POST" action="{{ route('admin.add-notice.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label>Name</label>
                      <input type="text" name="name" value="{{old('name')}}" required  class="form-control" />
                      <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>                 
                    
                    <div class="mb-3">
                        <label>PDF File</label>
                        <input type="file" name="file" value="{{old('file')}}" accept="application/pdf" class="form-control" />
                        <span class="system required" style="color: red;">(Select only pdf file)*</span>
                        <span style="color:red;">{{ $errors->first('file') }}</span>
                    </div>
                    <h6>Status Mode</h6>
                    <div class="row">                        
                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" value="1" />
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary" name="save" value="Save" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection