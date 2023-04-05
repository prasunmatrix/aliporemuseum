@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Update LOCATION</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Update LOCATION</li>
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

                <form method="POST" action="{{ route('admin.update.location',$cms->id ) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Name in English</label>
                        <input type="text" name="name" value="{{ $cms->name }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="mb-3">
                        <label>Name in Bengali</label>
                        <input type="text" name="nameBengali" value="{{ $cms->nameBengali }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('nameBengali') }}</span>
                    </div>
                    <div class="mb-3">
                        <label>Latitude</label>
                        <input type="text" name="latitude" value="{{ $cms->latitude }}" class=" form-control" />
                        <span style="color:red;">{{ $errors->first('latitude') }}</span>
                        <span style="color:red;">{{ $errors->first('latitudeerror') }}</span>
                    </div>
                    <div class="mb-3">
                        <label>Longitude</label>
                        <input type="text" name="longitude" value="{{ $cms->longitude }}" class=" form-control" />
                        <span style="color:red;">{{ $errors->first('longitude') }}</span>
                        <span style="color:red;">{{ $errors->first('longitudeerror') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Type</label>
                      <select name="type" class="form-control">
                        <option value="">Select Type</option>
                        @foreach( $type as $val )
                        <option value="{{ $val['id'] }}" @if($cms->type == $val['id']) selected @endif>{{ $val['name'] }}( {{ $val->nameBengali }} )</option>
                        @endforeach
                      </select>
                      <span style="color:red;">{{ $errors->first('type') }}</span>
                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-3">
                            <label>Is Favourite</label>
                            <input type="checkbox" name="is_favourite" value="1"@if($cms->is_favourite==1) checked @endif />
                        </div>

                        <div class="col-md-6">
                          <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                          <input type="submit" class="btn btn-primary" name="update_location" value="Update LOCATION" />
                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
</div>

@endsection