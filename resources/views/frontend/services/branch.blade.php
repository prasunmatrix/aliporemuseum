@extends('layouts.app')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="custom12">
        <div class="custom6">
          <label>District</label>
          <select name="district" id="district" value="" onchange="searchByDistrict(this)" required="" class="form-control">
            <option value="">Select District</option>
            @foreach($district as $value)
            <option value="{{ @$value->id}}">{{ @$value->district_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="custom6">
          <label>Branch</label>
          <select name="branch" id="branch-dropdown" value="" required="" class="form-control">
            <option value="">Select Branch</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="custom12 branchList">
        @foreach($branch as $value)
        <!-- <div class="customcard custom3">
          <div class="customcard-body">
            <h5 class="customcard-title" style="text-transform: uppercase;">{{-- $value->name_of_the_branch --}}</h5>
            <p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">District :</label>{{-- $value->district_name --}} </p>
            <p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600; ">Block :</label><span style="text-transform: uppercase;"> {{-- $value->block --}} </span></p>
            <p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">Gram Panchayat : </label> {{-- $value->gram_panchayat --}} </p>
            <p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">IFSC Code :</label> {{-- $value->ifsc_code --}} </p>
            <p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">Branch Code : </label>{{-- $value->branch_code --}} </p>
            <a href="#" class="customcard-link">Branch Detail</a>
            <a href="#" onclick="showMap({{-- $value->latitude --}}, {{-- $value->longitude --}})" data-toggle="modal" data-target="#myModal" class="customcard-link trigger">Show Map</a>
          </div>
        </div> -->
        @endforeach
      </div>
    </div>

    <div class="modal">
      <div class="modal-content">
        <span class="close-button" onclick="toggleModal(false);">&times;</span>
        <h1>Location of the Branch & ATM </h1>
        <div id="map" style="height:400px"></div>
      </div>
    </div>

  </div>
</section>
@endsection
<script type="text/javascript">
  function showMap(lat, lng,atm_available) {
    //console.log(lat);
    //var atm = 1;
    if (atm_available == 1) {
      word = '<h1>atm available</h1>';
    } else {
      var word = '';
    }
    const myLatLng = {
      lat: lat,
      lng: lng
    };
    var infowindow = new google.maps.InfoWindow({
      content: word
    });
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5,
      center: myLatLng,
    });
    var marker = new google.maps.Marker({
      position: myLatLng,
      map,
      title: '',
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
    toggleModal(true);
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
        $('#branch-dropdown').html('<option value="">Select Branch</option>');
        $.each(res.list, function(key, value) {
          $("#branch-dropdown").append('<option value="' + value.id + '">' + ucfirst(value.name_of_the_branch) + '</option>');
        });
        for (var i = 0; i < res.list.length; i++) {
          var atm_available = res.list[i].atm_available;
          list += '<div class="customcard custom3">';
          list += '<div class="customcard-body">';
          if (atm_available == 1) {
            list += '<h5 class="customcard-title" style="text-transform: uppercase;">' + res.list[i].name_of_the_branch + '(ATM Available)</h5>';
          } else {
            list += '<h5 class="customcard-title" style="text-transform: uppercase;">' + res.list[i].name_of_the_branch + '</h5>';
          }
          list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">District : ' + res.list[i].name_of_the_branch + '</label> </p>';
          list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600; ">Block :</label><span style="text-transform: uppercase;"> ' + res.list[i].block + '</span></p>';
          list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">Gram Panchayat : </label> ' + res.list[i].gram_panchayat + ' </p>';
          list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">IFSC Code :</label> ' + res.list[i].ifsc_code + ' </p>';
          list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">Branch Code : </label> ' + res.list[i].branch_code + '</p>';
          list += ' <a href="#" class="customcard-link">Branch Detail</a>';
          list += '<a  href="#" onclick="showMap(' + res.list[i].latitude + ', ' + res.list[i].longitude +', ' + res.list[i].atm_available + ')" data-toggle="modal" data-target="#myModal" class="customcard-link trigger">Show Map</a>';
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
    $('#branch-dropdown').on('change', function() {
      var id = this.value;
      var list = "";
      $.ajax({
        url: "{{url('search-by-branch')}}",
        type: "GET",
        data: {
          id: id,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(res) {
          for (var i = 0; i < res.list.length; i++) {
            var atm_available = res.list[i].atm_available;
            list += '<div class="customcard custom3">';
            list += '<div class="customcard-body">';
            if (atm_available == 1) {
              list += '<h5 class="customcard-title" style="text-transform: uppercase;">' + res.list[i].name_of_the_branch + '(ATM Available)</h5>';
            } else {
              list += '<h5 class="customcard-title" style="text-transform: uppercase;">' + res.list[i].name_of_the_branch + '</h5>';
            }
            list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">District : ' + res.list[i].name_of_the_branch + '</label> </p>';
            list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600; ">Block :</label><span style="text-transform: uppercase;"> ' + res.list[i].block + '</span></p>';
            list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">Gram Panchayat : </label> ' + res.list[i].gram_panchayat + ' </p>';
            list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">IFSC Code :</label> ' + res.list[i].ifsc_code + ' </p>';
            list += '<p class="customcard-text" style="font-size: 13px;"><label style="font-weight:600">Branch Code : </label> ' + res.list[i].branch_code + '</p>';
            list += ' <a href="#" class="customcard-link">Branch Detail</a>';
            list += '<a  href="#" onclick="showMap(' + res.list[i].latitude + ', ' + res.list[i].longitude +',' + res.list[i].atm_available + ')" data-toggle="modal" data-target="#myModal" class="customcard-link trigger">Show Map</a>';
            list += '</div>';
            list += '</div>';
          }
          $('.branchList').html(list);
        }
      });
    });
  });

  function ucfirst(str, force) {
    str = force ? str.toLowerCase() : str;
    return str.replace(/(\b)([a-zA-Z])/,
      function(firstLetter) {
        return firstLetter.toUpperCase();
      });
  }
</script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyBBCrb9jMgk334tpDcleP0O-OXJ1iwkC0A&libraries"></script>