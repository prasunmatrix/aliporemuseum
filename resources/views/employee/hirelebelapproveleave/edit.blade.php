@extends('employee.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Approve/Reject Leave</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Approve/Reject Leave</li>
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

                <form method="POST" action="{{ route('employee.update.hireleave',$leaveData->id ) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $leaveData->id }}">
                    <input type="hidden" name="leaveId" value="{{ $leaveData->leaveId }}">
                    <input type="hidden" name="managerId" value="{{ Auth::guard('employee')->user()->emp_id }}">
                    
                    <input type="hidden" name="emp_id" value="{{ $empDetails->emp_id }}">
                    <input type="hidden" name="leave_type" value="{{ $leaveData->leave_type }}">
                    <input type="hidden" name="name" value="{{ $empDetails->name }}">
                    <input type="hidden" name="phone" value="{{ $empDetails->phone }}">
                    <input type="hidden" name="leave_start_date" value="{{ $leaveData->start_date }}">
                    <input type="hidden" name="leave_end_date" value="{{ $leaveData->end_date }}">
                    <input type="hidden" name="days" value="{{ $leaveData->daysCount }}">
                    <input type="hidden" name="description" value="{{ $leaveData->note }}">
                    <input type="hidden" name="supportingDoc" value="{{ $leaveData->supportingDoc }}">

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" disabled name="name" value="{{ $empDetails->name }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" disabled name="phone" value="{{ $empDetails->phone }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('phone') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Leave Type</label>
                      <select name="leave_type" class="form-control" disabled>
                        <option value="">Select Type</option>
                        @foreach( $leaveType as $val )
                        <option value="{{ $val['id'] }}" @if($leaveData->leave_type == $val['id']) selected @endif>{{ $val['leaveName'] }}</option>
                        @endforeach
                      </select>
                      <span style="color:red;">{{ $errors->first('leave_type') }}</span>
                    </div>

                    <div class="mb-3">
                        <label>Start Date</label>
                        <input type="text" disabled name="leave_start_date" value="{{ $leaveData->start_date }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('leave_start_date') }}</span>
                    </div>
                    <div class="mb-3">
                        <label>End Date</label>
                        <input type="text" disabled name="leave_end_date" value="{{ $leaveData->end_date }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('leave_end_date') }}</span>
                    </div>

                    <div class="mb-3">
                        <label>Days</label>
                        <input type="text" disabled name="days" value="{{ $leaveData->daysCount }}" class="form-control" />
                        <span style="color:red;">{{ $errors->first('leave_start_date') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Description</label>
                      <textarea name="description" disabled rows="5"  class="form-control">{{ $leaveData->note }}</textarea>
                      <span style="color:red;">{{ $errors->first('description') }}</span>
                    </div>

                    <div class="mb-3">
                      <label>Supporting Document : </label>
                      @if($leaveData->supportingDoc)
                      <a href=" {{ asset('uploads/leaveSupportingDoc/'.@$leaveData->supportingDoc) }}"  download>Download </a>
                      @else
                      N.A
                      @endif
                    </div>

                    <div class="mb-3">
                      <label>Action</label>
                      <select name="action" id="action"  class="form-control" required>
                        <option value="">Select Action</option>
                        <option value="approve">Approve</option>
                        <option value="rejected">Reject</option>
                      </select>
                      <span style="color:red;">{{ $errors->first('action') }}</span>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-6">
                          <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                          <input type="submit" class="btn btn-primary" name="update_leave" value="Update Leave" />
                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
</div>

@endsection