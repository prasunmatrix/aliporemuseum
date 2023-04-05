@extends('layouts.app')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

@section('content')
<!-- <div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-12">
      <div class="card-body green-div">
        <p class="card-text" style="font-size: 13px;">{--!! @$eventcalendar->content !!--} </p>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div> -->
<section>
  <div class="container">
    <div class="row">
      <p class="headline"><strong>Event Calendar</strong></p>
      <div class="notice-section">
        <div class="article">
          <p>
          {!! @$eventcalendar->content !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection