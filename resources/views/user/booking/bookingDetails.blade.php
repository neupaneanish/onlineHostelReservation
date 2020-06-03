@extends('user.navbar.navbar')
@section('content')

<div class="container-fluid booking-details-main-container">
<div class="booking-details-container">
    <p id = "booking-details-container-heading">{{$hostel['name']}}</p>
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 booking-details-cards">
            <div class="swiper-container gallery-top1">
                <div class="swiper-wrapper">
                  @if(!empty($images))
                  @foreach($images as $img)
                  <div class="swiper-slide booking-details-image-container">
                    <img src="{{asset('/uploads/'.$img->image)}}" alt="" srcset="">
                  </div>
                  @endforeach

                </div>
              
              </div>
              <div class="swiper-container gallery-thumbs1">
                <div class="swiper-wrapper">
                @foreach($images as $img)
                <div class="swiper-slide gallery-thumbnails">
                     <img src="{{asset('/uploads/'.$img->image)}}" alt="" srcset="">
                </div>
                @endforeach
                @endif

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
          <form action="/hostel/booking/{{$hostel['id']}}" method="post">
          @csrf
            <div class="booking-details-kyc">
                <!-- <p id = "kyc-price">NPR6900</p>
                <p  id = "tax">inclusive of all taxes</p>  -->
                <div class="form row">
                <div class="col-6 row booking-details-kyc-division">

              <div class="duration-flex">
              <label id= "label"  class="mr-sm-2" for="duration">Duration of Stay</label>
              <!-- <input type="text" id="period" value="1"> -->
              </div>
              <div class="duration-flex1">
                <input type="text" class="form-control" name="period" id="period" value="1" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" /></td>
                    <select class="custom-select mr-sm-2 " name="duration" id="duration" required >
                      <option  value ="days"> Day </option>
                      <option selected value ="month">Month</option>
                      <option value="year">Year</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-6 booking-details-kyc-division">
                <input type="hidden" name="today" value= "{{date('Y-m-d')}}">
                    <label id= "label" for="arrivalDate">Arrival Date</label>
                    <input type="date" name="date" class="form-control" id="arrivalDate" required>
                    @error('date')
                    <strong style="color:red">{{$message}}</strong>
                    @enderror
                  </div>
                  <div class="col-6 booking-details-kyc-division-1">
                    <label id= "label"  class="mr-sm-2" for="room-type">Room Type</label>
                    <select class="custom-select mr-sm-2 test dynamic" name="room_type" data-dependent="room" id="room_type" required>
                      <option value="">Choose Room type</option>
                      <option value="0">Single with attach Bathroom</option>
                      <option value="1">Single with non-attach Bathroom</option>
                      <option value="2">Shared with attach Bathroom</option>
                      <option value="3">Shared with non-attach Bathroom</option>
                      
                    </select>
                </div>
                <div class="col-6 booking-details-kyc-division-1">
                    <label id= "label"  class="mr-sm-2" for="room-facility">Available Room</label>
                    <select class="custom-select mr-sm-2" name="room_no" id="room_no" required>
                      <option value="" >select</option>                  
                    </select>
                </div>
            </div>
            <div class ="total-price">
                <div class="total-price-left">
                    <p>Total Price(Rs.)</p>
                    <p>(incl. of all taxes)</p>
                </div>
                <div class="total-price-right">
                    <p id ="total-price" name="totalPrice"></p>
                </div>
            </div>
            <button id = "booking-button">Book Now</button>
            </div>
            </form>

</div>
</div>
<div class="row booking-details-description-container">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
  <p id = "booking-hostel-name">{{$hostel['name']}}</p>
  <p id = "booking-hostel-address">{{$hostel['municipality']}}-{{$hostel['ward']}},{{$hostel['city']}}</p>
  <div class = "description-of-hostel">
  <p id = "booking-hostel-description">Description</p>
  <p>{{$hostel['description']}}
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php $id = $hostel['id'] ?>
<script>
  
  var hostel = '<?php echo $id; ?>';
  
jQuery(document).ready(function(){
  $.ajaxSetup({
                    headers: {
                       
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery('select[name="room_type"]').on('change',function(){
                  
                  var type = jQuery(this).val();
                  
                  if(type){
                    jQuery.ajax({
                      url:"/hostel/test/"+hostel+"/"+type,
                      type:"get",
                      dataType : "json",
                     success:function(data)
                     {
                      // console.log(data);
                      jQuery('select[name="room_no"]').empty();
                      jQuery('#total-price').empty();
                      $('select[name="room_no"]').append('<option value="">select Room</option>');
                      jQuery.each(data, function(key,value){
                        
                           $('select[name="room_no"]').append('<option value="'+ key +'">'+ key +'</option>');
                           
                           $('#total-price').append('0');
                           
                     });
                     }
                    });
                  }
                  else{
                    {
                  $('select[name="room_no"]').empty();
               }
                  }
                });
                jQuery('select[name="room_no"]').on('change',function(){
                  var roomno = jQuery(this).val();
                  var period = jQuery('#period').val();
                  var duration = jQuery('#duration').val();
                  if(duration=='days'){
                    period = period/30;
                    
                  }
                  if(duration=='year'){
                    period = period*12;
                  }
                  if(duration=='month'){
                    period
                  }
                  if(roomno){
                    jQuery.ajax({
                      url:"/hostel/room/price/"+hostel+"/"+roomno,
                      type:"post",
                      dataType : "json",
                     success:function(data)
                     {
                      $('#total-price').empty();
                      jQuery.each(data, function(key,value){
                           $('#total-price').append(period*value);
                            });
                          }
                     });
                  }
                });
                // if(!empty())
                jQuery('select[name="duration"]').on('change',function(){
                  var duration = jQuery(this).val();
                  var period = jQuery('#period').val();
                  var roomno = jQuery('#room_no').val();
                  var type = jQuery('#room_type').val();
                  if(duration=='days'){
                    period = period/30;
                    
                  }
                  if(duration=='year'){
                    period = period*12;
                  }
                  if(duration=='month'){
                    period
                  }
                  if(duration && period && roomno &&type){
                    jQuery.ajax({
                      url:"/hostel/room/price/"+hostel+"/"+roomno,
                      type:"post",
                      dataType : "json",
                     success:function(data)
                     {
                      $('#total-price').empty();
                      jQuery.each(data, function(key,value){
                           $('#total-price').append(period*value);
                            });
                          }
                     });
                  }
                });
                jQuery('#period').on('keyup',function(){
                var period = jQuery(this).val();
                  var duration = jQuery('#duration').val();
                  var roomno = jQuery('#room_no').val();
                  var type = jQuery('#room_type').val();
                  if(duration=='days'){
                    period = period/30;
                    
                  }
                  if(duration=='year'){
                    period = period*12;
                  }
                  if(duration=='month'){
                    period
                  }
                  if(duration && period && roomno &&type){
                    jQuery.ajax({
                      url:"/hostel/room/price/"+hostel+"/"+roomno,
                      type:"post",
                      dataType : "json",
                     success:function(data)
                     {
                    $('#total-price').empty();
                    jQuery.each(data, function(key,value){
                    $('#total-price').append(period*value);
                  });
                     }
                });
              }
              });
                 
});

</script>

</div>
<div class="container-fluid footer">
  <div class="row footer-container">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 footer-margin">
          <div class="footer-image-container">
          <img src="{{asset('images/logo.png')}}" alt="" srcset="">
          </div>
      </div>
  
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 footer-margin">
          <div class="footer-social-container">
              <p id = "social">Socil Platforms</p>
              <div class="footer-flex">
                  <a href="#"><img src="{{asset('images/facebook.svg')}}" alt="" srcset="">Facebook</a>
              </div>
              <div class="footer-flex">
                  <a href="#"><img src="{{asset('images/insta.svg')}}" alt="" srcset="">Instagram</a>
              </div>
              <div class="footer-flex">
                  <a href="#"><img src="{{asset('images/youtube.svg')}}" alt="" srcset="">YouTube</a>
              </div>
              <div class="footer-flex">
                  <a href="#"><img src="{{asset('images/watsapp.svg')}}" alt="" srcset="">Watsapp</a>
              </div>
          </div>
      </div>
  </div>
  </div>
@endsection