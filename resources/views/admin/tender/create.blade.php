@extends('admin.layouts.after-login-layout')

@section('unique-content')
<div class="container-fluid px-4">
  <h1 class="mt-4">Add Tender</h1>
  <ol class="breadcrumb mb-4">
    <!--<li class="breadcrumb-item active">Add Tender</li>-->
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

        <form method="POST" action="{{ route('admin.add-tender.post') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label>Tender Number</label>
            <input type="text" name="tender_no" value="{{old('tender_no')}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('tender_no') }}</span>
          </div>

          <div class="mb-3">
            <label>Tender Subject</label>
            <input type="text" name="tender_subject" value="{{old('tender_subject')}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('tender_subject') }}</span>
          </div>
          <div class="mb-3">
            <label>Tender Type</label>
            <select name="tender_type" id="tender_type" value="{{old('tender_type')}}" required class="form-control">
              <option value="">Tender Type</option>
              <option value="E-Tender">E-Tender</option>
              <option value="Paper Tender">Paper Tender</option>
            </select>
            <span style="color:red;">{{ $errors->first('tender_type') }}</span>
          </div>

          <div class="mb-3">
            <label>Tender Publication Date</label>
            <input type="date" name="tender_date" value="{{old('tender_date')}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('tender_date') }}</span>
          </div>
          <div class="mb-3">
            <label>Last Date of Aplication</label>
            <input type="date" name="last_date_of_application" value="{{old('last_date_of_application')}}" required class="form-control" />
            <span style="color:red;">{{ $errors->first('last_date_of_application') }}</span>
          </div>
          <div class="mb-3">
            <label>Tender Notice</label>
            <input type="file" name="tender_notice" value="{{old('tender_notice')}}" accept="application/pdf" class="form-control" />
            <span class="system required" style="color: red;">(Select only pdf file)*</span>
            <span style="color:red;">{{ $errors->first('tender_notice') }}</span>
          </div>
          <div class="mb-3">
            <label>Related Ammendment/Notice/Notification</label>
            <input type="file" name="related_notification" value="{{old('related_notification')}}" accept="application/pdf" class="form-control" />
            <span class="system required" style="color: red;">(Select only pdf file)*</span>
            <span style="color:red;">{{ $errors->first('related_notification') }}</span>
          </div>

          <h6>Status Mode</h6>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label>Status</label>
              <input type="checkbox" name="status" value="1" />
            </div>
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary" name="save" value="Save" />
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