@extends('layouts.app')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
<div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-12">
      <div class="card-body green-div">
        <p class="card-text" style="font-size: 13px;">{!! @$eventcalendar->content !!} </p>
      </div>
    </div>
  </div>
</div>


<div class="clearfix"></div>
@endsection
<!-- <script type="text/javascript">
  function showMap(lat, lng) {
    const myLatLng = {
      lat: lat,
      lng: lng
    };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5,
      center: myLatLng,
    });

    new google.maps.Marker({
      position: myLatLng,
      map,
      title: "",
    });
  }

  //window.initMap = initMap;
</script> -->

<!-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyBBCrb9jMgk334tpDcleP0O-OXJ1iwkC0A&libraries"></script> -->