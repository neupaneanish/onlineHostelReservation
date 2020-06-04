@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
 <div class="col-sm-12 col-md-12 col-lg-12 left-section-container">
    

<div class="list-hostel">
  <h3></h3>
  <p id = "booking-list">List of Bookings</p>
</div>
@if(!empty($bookings))
@foreach($bookings as $booking)
      <div class="add-hostel mb-5">
        <div class="list-hostel">
              <div class="admin-booking-container">
                    <div class="admin-booking-image-container">
                    <img src="{{asset('/uploads/'.$booking->image)}}" alt="" srcset="">
                    </div>
                    <div class="admin-booking-text-section">
                    <div class="booking-information">
                        <p>Username:</p>
                        <p>{{$booking->email}}</p>
                    </div>
                    <div class="booking-information">
                        <p>fullname:</p>
                        <p>{{$booking->fullname}}</p>
                    </div>
                    <div class="booking-information">
                        <p>Booked Hostel:</p>
                        <p>{{$booking->name}}</p>
                    </div>
                    <div class="booking-information">
                        <p>Room-Type:</p>
                        <p>
                        @if($booking->room_type==0)
                        Single Bed with attached bathrooms
                        @elseif($booking->room_type==1)
                        Single Bed With non-attached Bathroom
                        @elseif($booking->room_type==2)
                        shared Bed With Attached Bathroom
                        @else
                        shared Bed With non-attached Bathroom
                        @endif
                       </p>
                    </div>
                    <div class="booking-information">
                        <p>Room No:</p>
                        <p>{{$booking->room_no}}</p>
                    </div>
                    <div class="booking-information">
                        <p>Booked Date</p>
                        <p>{{$booking->created_at}}</p>
                    </div>
                    <div class="booking-information">
                        <p>Phone No:</p>
                        <p>{{$booking->mobile}}</p>
                    </div>
                </div>
              </div>
            
        </div>
    </div>
    @endforeach
    @else
<!-- message here -->
    @endif

</div>
</div>

@endsection