@extends('employee.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
  <h1 class="mt-4">Leave</h1>

  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Leave Management</li>
  </ol>

  <div class="card mt-4">
    <div class="card-header">
    Leave Listing <a href="{{ route('employee.add-leave') }}" class="btn btn-primary btn-sm float-end">
        Apply Leave </a>
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
            <th>Sl No.</th>
            <th>Leave Type</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Days</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          echo $today = date("Y-m-d");
          ?>
          @php $count=1; @endphp
          @if( count($employee) > 0 )
          @foreach( $employee as $val )
          <?php
          /*if ($val->start_date > $today)
    echo "$val->start_date is latest than $today";
else
    echo "$val->start_date is older than $today";*/
    ?>
          <tr>
            <td> {{ $count }} </td>
            <td> {{ $val->leavename['leaveName'] }} </td>
            <td>{{ $val->start_date }}</td>
            <td>{{ $val->end_date }}</td>
            <td>{{ $val->daysCount	}}</td>
            <td>{{ $val->note }}</td>
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
            @if($val->start_date > $today && $val->status!='cancel' && $val->status!='rejected')
            <a href="{{ url('employee/modify-leave/'. $val->id) }}" class="btn btn-success"> Modify </a> 
            @endif
            @if($val->status!='rejected' && $val->status!='cancel')
            <a href="{{ url('employee/cancel-leave/'. $val->id) }}" class="btn btn-danger" onclick="return confirm('Are you want to cancel this leave ?');"> Cancel </a>
            @endif 
          </td>
            <!-- <td> <a href="{{-- url('admin/edit-branch/'. $val->id) --}}" class="btn btn-success"> Edit </a> | <a href="{{-- url('admin/delete-branch/'. $val->id) --}}" class="btn btn-danger" onclick="return confirm('Are you want to delete this branch ?');"> Delete </a>
            </td> -->
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