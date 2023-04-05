@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
<div class="container" style="padding:10px">
<div class="row" style="padding:20px">
<div class="col-md-6">
  <label>District</label>
  <select name="district" id="district" value="" onchange="searchByDistrict(this)" required="" class="form-control">
    <option value="">Select District</option>
    @foreach($district as $value)
    <option value="{{ @$value->id}}">{{ @$value->district_name}}</option>
    @endforeach
  </select>
</div>
<div class="col-md-6">
<label>Block</label>
  <select name="block" id="block-dropdown" value="" required="" class="form-control">
    <option value="">Select Block</option>
  </select>
</div>
</div>
  <div class="row branchList">
    @foreach($branch as $value)
    <div class="card col-md-3">
      <div class="card-body">
        <h5 class="card-title" style="text-transform: uppercase;">{{ $value->name_of_the_branch}}</h5>
        <p class="card-text" style="font-size: 13px;"><label style="font-weight:600">District :</label>{{ $value->district_name}} </p>
        <p class="card-text" style="font-size: 13px;"><label style="font-weight:600; ">Block :</label><span style="text-transform: uppercase;"> {{ $value->block}} </span></p>
        <p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Gram Panchayat : </label> {{ $value->gram_panchayat}} </p>
        <p class="card-text" style="font-size: 13px;"><label style="font-weight:600">IFSC Code :</label> {{ $value->ifsc_code}} </p>
        <p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Branch Code : </label>{{ $value->branch_code}} </p>
        <a href="#" class="card-link">Branch Detail</a>
        <a onclick="showMap({{ $value->latitude }}, {{$value->longitude}})" data-toggle="modal" data-target="#myModal" class="card-link">Show Map</a>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <!--<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Branch Location</h4>
        </div>-->
      <div class="modal-body">
        <div id="map" style="height:400px"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

</div>
<div class="clearfix"></div>
@endsection
<script type="text/javascript">
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
  function searchByDistrict(dis) {
    var dist_id = $(dis).val();
    var list = "";
    $.ajax({
      type: "GET",
      url: "{{url('search-by-district')}}",
      data: {
        dist_id: dist_id,
        _token: '{{csrf_token()}}'
      },
      dataType: 'json',
      beforeSend: function() {
        
      },
      success: function(res) {
        $('#block-dropdown').html('<option value="">Select Block</option>');
        $.each(res.list, function(key, value) {
          $("#block-dropdown").append('<option value="' + value.id + '">' + ucfirst(value.block) + '</option>');
        });
        for (var i = 0; i < res.list.length; i++) {
          list += '<div class="card col-md-3">';
          list += '<div class="card-body">';
          list += '<h5 class="card-title" style="text-transform: uppercase;">' + res.list[i].name_of_the_branch + '</h5>';
          list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">District :' + res.list[i].name_of_the_branch + '</label> </p>';
          list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Block :</label><span style="text-transform: uppercase;">' + res.list[i].block + '</span></p>';
          list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Gram Panchayat : </label> ' + res.list[i].gram_panchayat + ' </p>';
          list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">IFSC Code :</label> ' + res.list[i].ifsc_code + ' </p>';
          list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Branch Code : </label>' + res.list[i].branch_code + '</p>';
          list += ' <a href="#" class="card-link">Branch Detail</a>';
          list += '<a onclick="showMap(' + res.list[i].latitude + ', ' + res.list[i].longitude + ')" data-toggle="modal" data-target="#myModal" class="card-link">Show Map</a>';
          list += '</div>';
          list += '</div>';
        }
        $('.branchList').html(list);
      },
      error: function(err) {
        console.log(err);
      }
    }).done(() => {

    });
  }

  $(function() {
    $('#block-dropdown').on('change', function() {
      var id = this.value;
      var list = "";
      $.ajax({
        url: "{{url('search-by-block')}}",
        type: "GET",
        data: {
          id: id,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(res) {
          for (var i = 0; i < res.list.length; i++) {
            list += '<div class="card col-md-3">';
            list += '<div class="card-body">';
            list += '<h5 class="card-title">' + res.list[i].name_of_the_branch + '</h5>';
            list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">District :' + res.list[i].name_of_the_branch + '</label> </p>';
            list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Block :</label><span style="text-transform: uppercase;">' + res.list[i].block + ' </span></p>';
            list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Gram Panchayat : </label> ' + res.list[i].gram_panchayat + ' </p>';
            list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">IFSC Code :</label> ' + res.list[i].ifsc_code + ' </p>';
            list += '<p class="card-text" style="font-size: 13px;"><label style="font-weight:600">Branch Code : </label>' + res.list[i].branch_code + '</p>';
            list += ' <a href="#" class="card-link">Branch Detail</a>';
            list += '<a onclick="showMap(' + res.list[i].latitude + ', ' + res.list[i].longitude + ')" data-toggle="modal" data-target="#myModal" class="card-link">Show Map</a>';
            list += '</div>';
            list += '</div>';
          }
          $('.branchList').html(list);
        }
      });
    });
  });

  function ucfirst(str,force){
          str=force ? str.toLowerCase() : str;
          return str.replace(/(\b)([a-zA-Z])/,
                   function(firstLetter){
                      return   firstLetter.toUpperCase();
                   });
     }
</script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyBBCrb9jMgk334tpDcleP0O-OXJ1iwkC0A&libraries"></script>