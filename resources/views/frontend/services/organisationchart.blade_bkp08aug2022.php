@extends('layouts.app')
@section('content')
<div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-4">
      <div class="card-body green-div" style="text-align:center">
        <h3 style="text-align:center">Organisation Chart</h3>
        @foreach($chart as $val)
        <img src="{{ asset('uploads/organisation/'.@$val->image) }} " style="height:550px; width:400px; object-fit:contain;padding:50px" class="photo">
      
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection