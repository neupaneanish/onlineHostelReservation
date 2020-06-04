@extends('user.navbar.navbar')
@section('content')

<div class="container">
    @if(!empty($books))
    @foreach( $books as $book)
    <div class="booking-container">
    <div class="row">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 booking-cards">
            <div class="booking-image-container">
            <img src="{{asset('/uploads/'.$book->image)}}" alt="" srcset="">
            </div>
        </div>
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 booking-cards">
            <div class="booking-text-container">
                <p>{{$book->name}}</p>
                <p>{{$book->municipality}}-{{$book->ward}},{{$book->city}}</p>
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
            <p class="mt-3">Room No. :@if($book->room_no==0)
            Single Bed With Attached Bathroom
                @elseif($book->room_no==1)
                Single Bed With non-attached Bathroom
                @elseif($book->room_no==2)
                shared Bed With Attached Bathroom
                @else
                shared Bed With non-attached Bathroom
                @endif
            </p>
            <p class="mt-3">Room No. :{{$book->room_no}}</p>
            <p class="mt-3">Arrival Date:{{$book->arrival_date}}</p>
            <p class="mt-3">Booked On:{{$book->created_at}}</p>
            @if($book->status=='1')
            <button style="cursor:not-allowed; background:#ee2e24; border:2px solid #ee2e24;" class="view-details">cancelled</button>
            @endif
                <div class="booking-lower-section">
                <div class = "booking-lower-section-left">
                <p id = "price">PRICE(NRP):{{$book->price}}</p>
                <!-- <p id = "per-room">per room per month</p>  -->
                </div>
                <?php $today = date('Y-m-d') ?>
                @if(($book->arrival_date >= $today) && ($book->status==0))
                <div class="booking-buttons">
                    <a href="/hostel/booking/edit/{{$book->id}}"><button class = "view-details">Edit Booking</button></a> 
                </div> 
                <form action="/hostel/booking/cancel/{{$book->id}}" method="post">
                @csrf
                <div class="booking-buttons">
                    <button style = "background:#ee2e24; border:2px solid #ee2e24;" class = "view-details" type="submit">Cancel Booking</button> 
                </div> 
                </form>
                @endif
            </div> 
            </div>
    </div>
</div>
</div>
    @endforeach
    @endif
</div>

@endsection