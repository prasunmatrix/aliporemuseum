@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Update TYPE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Update TYPE</li>
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

                <form method="POST" action="{{ route('admin.update.type',$cms->id ) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Name(English)</label>
                        <input type="text" name="name" value="{{ $cms->name }}" required class="form-control" />
                        <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="mb-3">
                        <label>Name(Bengali)</label>
                        <input type="text" name="nameBengali" value="{{ $cms->nameBengali }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('nameBengali') }}</span>
                    </div>
                    
                    <div class="mb-3">
                        <label> @if($cms->fileName)
                            <img src="{{ asset('uploads/typeicon/'.$cms->fileName) }}" alt="{{ $cms->fileName }}" width="50" height="50"> </img>
                            @else
                            N.A
                            @endif
                        </label><br/>

                        <label>Image File</label>
                        <input type="file" name="iconfile" class="form-control" />
                        <input type="hidden" name="cms_old_iconfile" id="cms_old_iconfile" value="{{ $cms->fileName }}">
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                          <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                          <input type="submit" class="btn btn-primary" name="update_type" value="Update TYPE" />
                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
</div>

@endsection