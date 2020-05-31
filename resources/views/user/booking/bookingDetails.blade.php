@extends('user.navbar.navbar')
@section('content')

<div class="container-fluid booking-details-main-container">
<div class="booking-details-container">
    <p id = "booking-details-container-heading">Prince Boys Hostel</p>
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 booking-details-cards">
            <div class="swiper-container gallery-top1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide booking-details-image-container">
                    <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide booking-details-image-container">
                       <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide booking-details-image-container">
                       <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide booking-details-image-container">
                       <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide booking-details-image-container">
                       <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                  </div>
                </div>
              
              </div>
              <div class="swiper-container gallery-thumbs1">
                <div class="swiper-wrapper">
                <div class="swiper-slide gallery-thumbnails">
                     <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                </div>
                  <div class="swiper-slide gallery-thumbnails">
                       <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide gallery-thumbnails">
                       <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide gallery-thumbnails">
                       <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                  </div>
                  <div class="swiper-slide gallery-thumbnails">
                       <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                  </div>
                </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>
            
              <!-- Initialize Swiper -->
              <script>
                var galleryThumbs = new Swiper('.gallery-thumbs1', {
                  spaceBetween: 10,
                  slidesPerView: 3,
                  freeMode: true,
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                  },
                            breakpoints: {
                      // when window width is >= 993px
                      1350: {
                      slidesPerView: 4,
                      spaceBetween: 10
                      },
                  },
                  watchSlidesVisibility: true,
                  watchSlidesProgress: true,
                });
                var galleryTop = new Swiper('.gallery-top1', {
                  spaceBetween: 10,
                  thumbs: {
                    swiper: galleryThumbs
                  }
                });
              </script>
            {{-- <div class="booking-details-image-container">
            <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
            </div> --}}
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 booking-details-cards-left">
            <div class="booking-details-kyc">
                <p id = "kyc-price">NPR6900</p>
                <p  id = "tax">inclusive of all taxes</p> 
                <div class="form row">
                <div class="col-6 booking-details-kyc-division">
                    <label id= "label"  class="mr-sm-2" for="duration">Duration of Stay</label>
                    <select class="custom-select mr-sm-2" onchange="calculator()" id="duration">
                      <option selected value ="1">1 months</option>
                      <option value="2">2 Months</option>
                      <option value="3">3 Months</option>
                      <option value="4">4 Months</option>
                      <option value="5">5 Months</option>
                      <option value="6">6 Months</option>
                    </select>
                </div>
                <div class="form-group col-6 booking-details-kyc-division">
                    <label id= "label" for="arrivalDate">Arrival Date</label>
                    <input type="date" class="form-control" id="arrivalDate">
                  </div>
                  <div class="col-6 booking-details-kyc-division-1">
                    <label id= "label"  class="mr-sm-2" for="room-type">Room Type</label>
                    <select class="custom-select mr-sm-2" id="room-type">
                      <option selected value="1">Shared</option>
                      <option value="2">Single</option>
                    </select>
                </div>
                <div class="col-6 booking-details-kyc-division-1">
                    <label id= "label"  class="mr-sm-2" for="room-facility">Room Facilities</label>
                    <select class="custom-select mr-sm-2" id="room-facility">
                      <option selected value="1" >With Shared Bathroom</option>
                      <option value="2">With Attached Bathroom</option>
                    </select>
                </div>
            </div>
            <div class ="total-price1">
              <div class="total-price1-left">
                  <p>Addition Charges</p>
                  <p>(25% extra on single Room)</p>
              </div>
              <div class="total-price1-right">
                  <p id = "total-price1">0</p>
              </div>
          </div>
          <div class ="total-price2">
            <div class="total-price2-left">
                <p>Additional Charges</p>
                <p>(25% extra on Attached Bathroom)</p>
            </div>
            <div class="total-price2-right">
                <p id = "total-price2">0</p>
            </div>
        </div>
            <div class ="total-price">
                <div class="total-price-left">
                    <p>Total Price</p>
                    <p>(incl. of all taxes)</p>
                </div>
                <div class="total-price-right">
                    <p id = "total-price">6900</p>
                </div>
            </div>
            <a href="#"><button id = "booking-button">Book Now</button></a>
            </div>

</div>
</div>
<div class="row booking-details-description-container">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
  <p id = "booking-hostel-name">Price Boys Hostels</p>
  <p id = "booking-hostel-address">Thamel, Kathmandu</p>
  <div class = "description-of-hostel">
  <p id = "booking-hostel-description">Description</p>
  <p id = "booking-hostel-description-sub">THis is the nicest place to stay!! let us serve you for the greater good.
  the majority of our customer are students.THis is the nicest place to stay!! let us serve you for the greater good.
  the majority of our customer are students.THis is the nicest place to stay!! let us serve you for the greater good.
  the majority of our customer are students.THis is the nicest place to stay!! let us serve you for the greater good.
  the majority of our customer are students.THis is the nicest place to stay!! let us serve you for the greater good.
  the majority of our customer are students.THis is the nicest place to stay!! let us serve you for the greater good.
  the majority of our customer are students.
  </p>
  </div>
  <p id = "booking-hostel-amenities">Amenites</p>
  <div class="feature-container">
    <div class="feature-wrapper">
            <span>
            <img src="{{asset('images/general.svg')}}" alt="" srcset="">
            </span>
            <span>
                fan
            </span>
        </div>
    <div class="feature-wrapper">
        <span>
        <img src="{{asset('images/wifi.svg')}}" alt="" srcset="">
        </span>
        <span>
            Free Wifi
        </span>
    </div>  
    
    <div class="feature-wrapper">
        <span>
        <img src="{{asset('images/geyser.svg')}}" alt="" srcset="">
        </span>
        <span>
            Geyser
        </span>
    </div>

    <div class="feature-wrapper">
        <span>
        <img src="{{asset('images/parking.svg')}}" alt="" srcset="">
        </span>
        <span>
            Free Parking
        </span>
    </div>

    <div class="feature-wrapper">
        <span>
        <img src="{{asset('images/powerbackup.svg')}}" alt="" srcset="">
        </span>
        <span>
            Power backup
        </span>
    </div>
    
</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 complementry">
<p id = "complementry">Enjoy meals During your stay</p>
<div class="complementry-cards">
  <div class="snacks-cards">
    <div class="snacks-image">
    <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
    </div>
    <div class="snacks-schedule">
      <p>Snacks & Breakfast</p>
      <p>Morning and mid-day</p>
      <p>included in the package</p>
    </div>
  </div>
</div>
<div class="complementry-cards">
  <div class="snacks-cards">
    <div class="snacks-image">
    <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
    </div>
    <div class="snacks-schedule">
      <p>lunch & Dinner</p>
      <p>Morning and Evening</p>
      <p>included in the package</p>
    </div>
  </div>
</div>
<div class="complementry-cards">
  <div class="snacks-cards">
    <div class="snacks-image">
    <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
    </div>
    <div class="snacks-schedule">
      <p>Teas & Coffee</p>
      <p>Twice a day(whenever you like)</p>
      <p>included in the package</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection