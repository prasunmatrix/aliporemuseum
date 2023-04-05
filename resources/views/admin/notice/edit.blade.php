@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Notice</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit Notice</li>
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

                <form method="POST" action="{{ route('admin.update.notice',$notice->id ) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $notice->name }}" required class="form-control" />
                        <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>
                    
                    <div class="mb-3">
                        <img src="{{ asset('uploads/file.jpg') }}" alt="{{ $notice->name }}" width="100"
                                height="100"> </img><br/>
                        <label>File</label>
                        <input type="file" name="file" class="form-control" />
                        <input type="hidden" name="old_file" id="old_file" value="{{ $notice->file }}">
                        <span style="color:red;">{{ $errors->first('file') }}</span>
                        <span class="system required" style="color: red;">(Select only pdf file)*</span>
                       
                    </div>

                    

                    <h6>Status Mode</h6>
                    <div class="row">                        
                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" value="1"@if($notice->status==1) checked @endif />
                        </div>
                        <div class="col-md-6">
                          <input type="submit" class="btn btn-primary" name="update" value="Update" />
                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
</div>

@endsection