@extends('user.navbar.navbar')

@section('content')
<<div class="container-fluid hostel-lists">
    <p id = "hostel-lists-heading">Hostels Available From Kathmandu</p>

  <div class="row hostel-lists-container">
      <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 hostel-lists-division">
          <a href = "#"><img src="{{asset('images/6.jpg')}}" alt="" srcset=""></a>
          <div class="hostel-lists-text-section">
            <p>prince boys hostel</p>
            <p>Thamel, Kathmandu</p>
            <button class = "verified-container"> <img id = "verified" style = "width:15px;height:15px;" src="{{asset('images/tick.svg')}}" alt="" srcset=""> MyHostel Verified</button>
            <p>NRP6999</p>
            <p>per room per month</p>
             <a href="#"><button class = "view-details">View Details</button></a>
            <a href="#"><button class = "book-now">Book Now</button></a>
         </div>
      </div>
  </div>
</div>
@endsection