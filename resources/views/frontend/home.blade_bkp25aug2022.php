@extends('layouts.app')

@section('content')
<section id="banner">
  <div class="section-carousel">

    <div class="carousel-single owl-carousel owl-drag owl-theme" id="bannerSlider">

      @foreach ($bannerlist as $key => $banner)

      <div class="carousel-item w-100 d-flex align-items-center" style='background-image: url("{{ asset('uploads/gallery/'.$banner->image.'') }}");'>
        <div class="slider-container">
          <div class="row">
            <div class="text-center text-white">
              <h2 class="h1 text-uppercase"><strong>{{ @$banner->title }}</strong></h2>
              <p class="text-uppercase small">{{ strip_tags(@$banner->short_desc) }}</p>
              <a href="#" class="blue-btn">More Info</a>
            </div>
          </div>
        </div>
      </div>

      @endforeach

    </div>

  </div>
</section>

<section id="card">
  <div class="container">
    <div class="row">
      <div class="card-div">
        <div class="column">
          <div class="card">
            <div class="card-icon"><img src="{{ asset( 'assets/frontend/images/icon1.png' ) }} "></div>
            <h3>Agricultural Loan</h3>
            <a href="#" class="blue-btn">Read More</a>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <div class="card-icon"><img src="{{ asset( 'assets/frontend/images/icon2.png' ) }} "></div>
            <h3>Loan to ECCS</h3>
            <a href="#" class="blue-btn">Read More</a>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <div class="card-icon"><img src="{{ asset( 'assets/frontend/images/icon3.png' ) }} "></div>
            <h3>House Building Loans</h3>
            <a href="#" class="blue-btn">Read More</a>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <div class="card-icon"><img src="{{ asset( 'assets/frontend/images/icon4.png' ) }} "></div>
            <h3>Loan to Salaried Persons</h3>
            <a href="#" class="blue-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <!-- <div class="overlay"></div> -->
  <div class="loan_div">
    <div class="container">
      <div class="row">
        <div class="backimg" style="background-image: url('{{ asset('uploads/gallery/'.@$midbanner->image)}}')">
          <h2>{{ @$midbanner->title }}</h2>
          <p>{{ strip_tags(@$midbanner->short_desc) }}</p>
          <a href="#" class="white-btn">More Details</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="slide_gallery">
        <div class="small_slide">
          <div class="wrapper">
            <div class="carousel owl-carousel" id="smallSlider">
              @foreach(@$smallbanner as $key=>$val)
              <div class="card cardone" style="background-image: url('{{ asset('uploads/gallery/'.@$val->image)}}')">
                <div class="text-left text-white">
                  <p class="date">{{ @$val->title }}</p>
                  <p class="slider-text">{!! @$val->short_desc !!}</p>
                </div>
              </div>
              @endforeach
              <!-- <div class="card cardtwo">
                <div class="text-left text-white">
                  <p class="date">January 1,, 2016</p>
                  <p class="slider-text">Easy Agricultural Loan</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="small_gallery">
          <div class="gallery-rowone">
            @foreach ($sidebar_gallery as $key => $value)
            <img src="{{ asset('uploads/gallery/'.$value->image.'') }} " class="photo">
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="features">
        <h3>SMS US 24×7 TO +91 8373888063</h3>
        <h5>Send an SMS:</h5>
        <p>Your Savings Account No.<.space>Withdrawal Amount<.space> withdrawal date to +91 8373888063</p>
        <h5>For example:</h5>
        <p>Type 100000000000 6500 01/01/2018 and send to +91 8373888063</p>
        <h6>* This number is not for making any type of call, only to send an SMS.</h6>
      </div>
    </div>
  </div>
</section>


<!---------------------------------footer-------------------------------->


@endsection