@extends('employee.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
  <h1 class="mt-4">Applied Leave of Employee</h1>

  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Approve Leave Management</li>
  </ol>

  <div class="card mt-4">
    {{--<div class="card-header">
    Leave Listing <a href="{{ route('employee.add-leave') }}" class="btn btn-primary btn-sm float-end">
        Apply Leave </a>
    </div>--}}
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
            <th>Sl No.</th>
            <th>LeaveID/EmpID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Leave Type</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Days</th>
            {{--<th>Description</th>--}}
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //echo "<pre>";
          //print_r($employee);
          ?>
          @php $count=1; @endphp
          @if( count($employee) > 0 )
          @foreach( $employee as $val )
          <tr>
            <td>{{ $count }}</td>
            <td>#{{ $val->id }}/#{{ $val->emp_id }}</td>
            <td>{{ $val->empName['name'] }}</td>
            <td>{{ $val->empName['phone'] }}</td>
            <td>{{ $val->leavename['leaveName'] }}</td>
            <td>{{ $val->start_date }}</td>
            <td>{{ $val->end_date }}</td>
            <td>{{ $val->daysCount	}}</td>
            {{--<td>{{ $val->note }}</td>--}}
            <td>
              @if($val->status=='pending')
              <span class="bg-warning text-white">Pending</span>
              @elseif($val->status=='partially approve')
              <span class="bg-info text-white">Partially Approve</span>
              @elseif($val->status=='approve')
              <span class="bg-success text-white">Approved</span>
              @elseif($val->status=='rejected')
              <span class="bg-danger text-white">Rejected</span>
              @elseif($val->status=='cancel')
              <span class="bg-secondary text-white">Cancelled</span>
              @endif
            </td>
            <td> 
              @if($val->status=='pending')
              <a href="{{ url('employee/edit-leave',['encryptCode'=>encrypt($val->id, Config::get('Constant.ENC_KEY'))]) }}" class="btn btn-success"> Approve/Reject </a>
              @else
              <span class="btn bg-secondary text-white"> N.A </span>
              @endif
            </td>
          </tr>
          @php $count++; @endphp
          @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection