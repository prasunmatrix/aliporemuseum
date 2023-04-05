@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add TYPE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add a new type</li>
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

                <form method="POST" action="{{ route('admin.add-type.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label>Name(English)</label>
                      <input type="text" name="name" value="{{old('name')}}"  required class="form-control" />
                      <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Name(Bengali)</label>
                      <input type="text" name="nameBengali" value="{{old('nameBengali')}}" class="form-control" />
                      <span style="color:red;">{{ $errors->first('nameBengali') }}</span>
                    </div>
                   
                    <div class="mb-3">
                        <label>Image FIle</label>
                        <input type="file" name="iconfile" value="{{old('iconfile')}}"  class="form-control" />
                    </div>

                    <div class="row">
                       
                        <div class="col-md-6">
                          <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                          <input type="submit" class="btn btn-primary" name="save_type" value="Save TYPE" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-scripts')

@endpush