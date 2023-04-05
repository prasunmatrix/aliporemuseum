@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
  <h1 class="mt-4">Edit Tender</h1>
  <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Edit Tender</li>
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

        <form method="POST" action="{{ route('admin.update.tender',$tender->id ) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label>Tender Number</label>
            <input type="text" name="tender_no" value="{{ @$tender->tender_no}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('tender_no') }}</span>
          </div>
          <div class="mb-3">
            <label>Tender Subject</label>
            <input type="text" name="tender_subject" value="{{ @$tender->tender_subject}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('tender_subject') }}</span>
          </div>
          <div class="mb-3">
            <label>Tender Type</label>
            <select name="tender_type" id="tender_type" required class="form-control">
              <option value="">Tender Type</option>
              <option value="E-Tender"@if(@$tender->tender_type=="E-Tender") selected @endif>E-Tender</option>
              <option value="Paper Tender"@if(@$tender->tender_type=="Paper Tender") selected @endif>Paper Tender</option>
            </select>
            <span style="color:red;">{{ $errors->first('tender_type') }}</span>
          </div>
          <div class="mb-3">
            <label>Tender Publication Date</label>
            <input type="date" name="tender_date" value="{{date('Y-m-d', strtotime( @$tender->tender_date ))}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('tender_date') }}</span>
          </div>
          <div class="mb-3">
            <label>Last Date of Aplication</label>
            <input type="date" name="last_date_of_application" value="{{date('Y-m-d', strtotime( @$tender->last_date_of_application ))}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('last_date_of_application') }}</span>
          </div>
          <div class="mb-3">
            <a href="{{ asset('uploads/tender/'.@$tender->tender_notice)}}" download> <img src="{{ asset('uploads/file.jpg') }}" alt="{{ $tender->tender_no }}" width="100" height="100"> </img></a><br />
            <label>File</label>
            <input type="file" name="tender_notice" class="form-control" />
            <input type="hidden" name="old_tender_notice" id="old_tender_notice" value="{{ $tender->tender_notice }}">
            <span style="color:red;">{{ $errors->first('tender_notice') }}</span>
            <span class="system required" style="color: red;">(Select only pdf file)*</span>
          </div>
          <div class="mb-3">
            <a href="{{ asset('uploads/tender/'.@$tender->related_notification)}}" download><img src="{{ asset('uploads/file.jpg') }}" alt="{{ $tender->tender_no }}" width="100" height="100"> </img></a><br />
            <label>File</label>
            <input type="file" name="related_notification" class="form-control" />
            <input type="hidden" name="old_related_notification" id="old_related_notification" value="{{ $tender->related_notification }}">
            <span style="color:red;">{{ $errors->first('related_notification') }}</span>
            <span class="system required" style="color: red;">(Select only pdf file)*</span>
          </div>

          <h6>Status Mode</h6>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label>Status</label>
              <input type="checkbox" name="status" value="1" @if($tender->status==1) checked @endif />
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