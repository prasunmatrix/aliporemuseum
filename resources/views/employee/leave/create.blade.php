@extends('employee.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Apply Leave</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Apply a new leave</li>
    </ol>
    <div class="container-fluid px-4">
<?php
//echo $empId;
?>
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

                <form method="POST" action="{{ route('employee.add-leave.post') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="empId" value="{{ $empId }}">
                    <input type="hidden" name="bManagerId" value="{{ $bManagerId }}">
                    <div class="mb-3">
                      <label>Leave Type</label>
                      <select name="leave_type" required class="form-control">
                        <option value="">Select Type</option>
                        @foreach( $leaveType as $val )
                        <option value="{{ $val->id }}">{{ $val->leaveName}}</option>
                        @endforeach
                      </select>
                      <span style="color:red;">{{ $errors->first('leave_type') }}</span>
                    </div>

                    <div class="mb-3">
                        <label>Start Date</label>
                        <input type="date" name="leave_start_date" value="{{old('leave_start_date')}}" required class="form-control" />
                        <span style="color:red;">{{ $errors->first('leave_start_date') }}</span>
                    </div>
                    <div class="mb-3">
                        <label>End Date</label>
                        <input type="date" name="leave_end_date" value="{{old('leave_end_date')}}" required class="form-control" />
                        <span style="color:red;">{{ $errors->first('leave_end_date') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Description</label>
                      <textarea name="description" rows="5"  class="form-control" required>{{old('description')}}</textarea>
                      <span style="color:red;">{{ $errors->first('description') }}</span>
                    </div>

                    <div class="mb-3">
                        <label>Supporting Document</label>
                        <input type="file" name="supportingDoc" value="{{old('supportingDoc')}}" class="form-control" />
                    </div>
                    

                    <div class="row">
                        <div class="col-md-6">
                          <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                          <input type="submit" class="btn btn-primary" name="apply_leave" value="Apply Leave" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
  $(function() {
    $('.datepicker').datepicker({
      maxDate: 0,
      minDate: '-4m'
    });
  })
</script>