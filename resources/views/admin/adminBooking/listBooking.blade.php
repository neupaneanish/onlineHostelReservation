@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
 <div class="col-sm-12 col-md-12 col-lg-12 left-section-container">
    

<div class="list-hostel">
  <h3></h3>
  <p id = "booking-list">List of Bookings</p>
</div>
      <div class="add-hostel">
        <div class="list-hostel">
              <div class="admin-booking-container">
                    <div class="admin-booking-image-container">
                    <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="admin-booking-text-section">
                    <div class="booking-information">
                        <p>Username:</p>
                        <p>nitesh@gmail.com</p>
                    </div>
                    <div class="booking-information">
                        <p>fullname:</p>
                        <p>nitesh thapa</p>
                    </div>
                    <div class="booking-information">
                        <p>Booked Hostel:</p>
                        <p>hamro boys hostel</p>
                    </div>
                    <div class="booking-information">
                        <p>Room-Type:</p>
                        <p>Single Bed with attached bathrooms</p>
                    </div>
                    <div class="booking-information">
                        <p>Room No:</p>
                        <p>CH 103</p>
                    </div>
                    <div class="booking-information">
                        <p>Booked Date</p>
                        <p>2020-06-04</p>
                    </div>
                    <div class="booking-information">
                        <p>Phone No:</p>
                        <p>9811111111</p>
                    </div>
                </div>
              </div>
            
        </div>
    </div>
</div>
</div>

@endsection