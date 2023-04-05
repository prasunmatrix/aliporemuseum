@extends('layouts.app')
@section('content')
<!-- <div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-4">
      <div class="card-body green-div" style="text-align:center">
        <h3 style="text-align:center">Organisation Chart</h3>
        @foreach($chart as $val)
        <img src="{{-- asset('uploads/organisation/'.@$val->image) --}} " style="height:550px; width:400px; object-fit:contain;padding:50px" class="photo">
      
        @endforeach
      </div>
    </div>
  </div>
</div> -->
<section>
  <div class="container">
    <div class="row">
      <p class="headline"><strong>Organisation Chart</strong></p>
      <div class="notice-section">
        <div class="article">
          <p>
            @foreach($chart as $val)
            <!-- <img src="{{-- asset('uploads/organisation/'.@$val->image) --}} " style="height:550px; width:400px; object-fit:contain;padding:50px" class="photo"> -->
            <img src="{{ asset('uploads/organisation/'.@$val->image) }} " style="height:650px; width:700px; object-fit:contain;padding:50px" class="photo">
            @endforeach
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection