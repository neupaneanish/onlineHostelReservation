@extends('user.navbar.navbar')
@section('content')
<div class="image-container">
    <div class="image">
    <img src="{{asset('images/hostel.jpg')}}" alt="" srcset="">
    </div>
</div>
<div class="container search-tab">
<h3>Check Availability</h3>
<div class="row search-tab-row">
<div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4 search-place">
    <p>Search Your Place</p>
    <select id="search-place" class="form-control">
        <option selected>Search By Location</option>
        <option>Pokhara</option>
        <option>Kathmandu</option>
  </select>
</div>

<div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4 search-place">

    <p>Room Types</p>
 <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>With Attached Bathroom</option>
        <option>Without Attached Bathroom</option>
  </select>
</div>

<div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-3 col-xl-3  button-column">

<button id = "search-button" type = "submit">SEARCH</button>

</div>


</div>
</div>
<div class="container-fluid hostel-swiper">
    <p>Boys Hostels</p>
     <!-- Swiper -->

  <div class="swiper-container">
    <div class="swiper-wrapper">
      @if(!empty($boys))
      @foreach($boys as $boy)
      <div class="swiper-slide">
          <a href = "#"><img src="{{asset('/uploads/'.$boy['image'])}}" alt="" srcset=""></a>
          <div class="swiper-text-section">
            <p>{{$boy['name']}}</p>
            <p> {{$boy['municipality']}}-{{$boy['ward']}},{{$boy['city']}} </p>
            <button class = "verified-container"> <img id = "verified" style = "width:15px;height:15px;" src="{{asset('images/tick.svg')}}" alt="" srcset=""> MyHostel Verified</button>
            <p>NRP:{{$boy['price']}}</p>
            <p>@if($boy['room']==0)
            Single Bed With Attached Bathroom
              @elseif($boy['room']==1)
              Single Bed With non-attached Bathroom
              @elseif($boy['room']==2)
              shared Bed With Attached Bathroom
              @else
              shared Bed With non-attached Bathroom
              @endif
             per month</p>
            <a href="#"><button class = "book-now">Book Now</button></a>
        </div>
      </div>
      @endforeach
      @endif
    
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button"></div>
    <div class="swiper-button-prev swiper-button"></div>
  </div>
  
    <script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 993px
            1350: {
            slidesPerView: 4,
            spaceBetween: 30
            },
            993: {
            slidesPerView: 3,
            spaceBetween: 30
            },
            768: {
            slidesPerView: 2,
            spaceBetween: 30
            },
        },
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        });
    </script>
</div>


<div class="container-fluid hostel-swiper">
    <p>Girls Hostels</p>
     <!-- Swiper -->
     <div class="swiper-container"></a>
        <div class="swiper-wrapper">
          @if(!empty($girls))
          @foreach($girls as $boy)
          <div class="swiper-slide">
          <a href = "#"><img src="{{asset('/uploads/'.$boy['image'])}}" alt="" srcset=""></a>
          <div class="swiper-text-section">
            <p>{{$boy['name']}}</p>
            <p> {{$boy['municipality']}}-{{$boy['ward']}},{{$boy['city']}} </p>
            <button class = "verified-container"> <img id = "verified" style = "width:15px;height:15px;" src="{{asset('images/tick.svg')}}" alt="" srcset=""> MyHostel Verified</button>
            <p>NRP:{{$boy['price']}}</p>
            <p>@if($boy['room']==0)
            Single Bed With Attached Bathroom
              @elseif($boy['room']==1)
              Single Bed With non-attached Bathroom
              @elseif($boy['room']==2)
              shared Bed With Attached Bathroom
              @else
              shared Bed With non-attached Bathroom
              @endif
             per month</p>
            <a href="#"><button class = "book-now">Book Now</button></a>
        </div>
          </div>
          @endforeach
          @endif

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button"></div>
        <div class="swiper-button-prev swiper-button"></div>
      </div>
  
    <script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 993px
            1350: {
            slidesPerView: 4,
            spaceBetween: 30
            },
            993: {
            slidesPerView: 3,
            spaceBetween: 30
            },
            768: {
            slidesPerView: 2,
            spaceBetween: 30
            },
        },
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        });
    </script>
</div>

@endsection