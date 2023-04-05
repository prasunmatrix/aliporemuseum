@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Event Calendar</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Event Calendar</li>
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

                <form method="POST" action="{{ route('admin.post-eventcalendar') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                      <label>Content</label>
                      <textarea name="content_data" rows="10"  class="form-control contentdata">{{ @$eventcalendar->content }}</textarea>
                      <span style="color:red;">{{ $errors->first('content_data') }}</span>
                    </div>
                    <div class="col-md-3">
                      <!-- <button type="submit" class="btn btn-primary"> Save Category </button> -->
                      <input type="hidden" name="eventcalendar_id" value="{{ @$eventcalendar->id }}" />
                      <input type="submit" class="btn btn-primary" name="save" value="Save" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-scripts')

@endpush