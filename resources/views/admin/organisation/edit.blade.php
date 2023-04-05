@extends('admin.layouts.after-login-layout')
@section('unique-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Organisation Chart</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Organisation Chart</li>
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
                <form method="POST" action="{{ route('admin.update.organisation-chart',$chart->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <img src="{{ asset('uploads/organisation/'.@$chart->image) }}" alt="Organisation Chart" width="100" height="100"> </img><br />
                        <label>Organisation Chart</label>
                        <input type="file" name="image" class="form-control" />
                        <span style="color:red;">{{ $errors->first('image') }}</span>
                        <input type="hidden" name="chart_old_image" id="chart_old_image" value="{{ @$chart->image }}">
                    </div>
                    <div class="col-md-3">
                        <h6>Status Mode</h6>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label>Status</label>
                                <input type="checkbox" name="status" value="1" @if(@$chart->status==1) checked @endif />
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" name="save" value="Save" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection