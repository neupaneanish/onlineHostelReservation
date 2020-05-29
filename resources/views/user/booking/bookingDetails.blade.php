@extends('user.navbar.navbar')
@section('content')

<div class="container">
<div class="booking-details-container">
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
                  slidesPerView: 4,
                  freeMode: true,
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
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
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 booking-details-cards">
            <div class="booking-details-text-container">
                <p>Price Boys Hostel</p>
                <p>Near Bhagwati Marga, Kathmandu</p>
                <button class = "verified-container"> <img id = "verified" style = "width:15px;height:15px;" src="{{asset('images/tick.svg')}}" alt="" srcset=""> MyHostel Verified</button>
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
                <div class="booking-details-lower-section">
                <div class = "booking-details-lower-section-left">
                <p id = "price">NRP6900</p>
                <p id = "per-room">per room per month</p> 
                </div>
                 <div class="booking-details-buttons">
                    <a href="#"><button class = "view-details">View Details</button></a> 
                </div> 
            </div> 
            </div>
    </div>
</div>
</div>
</div>

@endsection