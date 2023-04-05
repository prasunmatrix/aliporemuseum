@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Subadmin</h1>
    <ol class="breadcrumb mb-4">
       <!--  <li class="breadcrumb-item active">New Permission</li> -->
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

                <form method="POST" action="{{ route('admin.add-subadmin.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label>Name</label>
                      <input type="text" name="name" value="{{old('name')}}" required  class="form-control" />
                      <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>


                    <div class="mb-3">
                      <label>Email</label>
                      <input type="text" name="email" value="{{old('email')}}" required  class="form-control" />
                      <span style="color:red;">{{ $errors->first('email') }}</span>
                    </div>


                    <div class="mb-3">
                      <label>Password</label>
                      <input type="text" name="password" value="{{old('password')}}" required  class="form-control" />
                      <span style="color:red;">{{ $errors->first('password') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Confirm Password</label>
                      <input type="text" name="password_confirmation" value="{{old('password_confirmation')}}" required  class="form-control" />
                      <span style="color:red;">{{ $errors->first('password_confirmation') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Role</label>
                      {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                      <span style="color:red;">{{ $errors->first('role') }}</span>
                    </div>                                     
                    
                   <div class="row"> 
                        <div class="col-md-6">
                          <input type="submit" class="btn btn-primary" name="" value="Save" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection