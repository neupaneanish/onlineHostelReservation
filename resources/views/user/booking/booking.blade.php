@extends('user.navbar.navbar')
@section('content')

<div class="container">
<div class="booking-container">
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 booking-cards">
            <div class="booking-image-container">
            <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
            </div>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 booking-cards">
            <div class="booking-text-container">
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
                <div class="booking-lower-section">
                <div class = "booking-lower-section-left">
                <p id = "price">NRP6900</p>
                <p id = "per-room">per room per month</p> 
                </div>
                 <div class="booking-buttons">
                    <a href="#"><button class = "view-details">View Details</button></a> 
                </div> 
            </div> 
            </div>
    </div>
</div>
</div>
</div>

@endsection