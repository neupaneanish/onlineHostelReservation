@extends('user.navbar.navbar')
@section('content')
<div class="image-container">
    <div class="image">
    <img src="{{asset('images/hostel.jpg')}}" alt="" srcset="">
    </div>
</div>
<style>
        .search-tab{
                margin-top: -300px !important;
        }
</style>
<div class="container search-tab hello">
<h3>Check Availability</h3>
<form action="/hostel/search" method="post">
@csrf
<div class="row search-tab-row">
<div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4 search-place">
    <p>Search Your Place</p>
    <select id="search-place" name="city" class="form-control">
        <option value="">Search By Location</option>
        @if(!empty($all))
        @foreach($all as $hostel)
        <option value="{{$hostel->city}}">{{$hostel->city}}</option>
        @endforeach
        @endif    
  </select>
</div>

<div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4 search-place">

    <p>Hostel Types</p>
 <select id="inputState" name="type" class="form-control">
        <option value ="">Choose...</option>
        <option value="0">Boys Hostel</option>
        <option value="1">Girls Hostel</option>
        <option value="2">Boys and Girls Hostel</option>
        
  </select>
</div>

<div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-3 col-xl-3  button-column">

<button id = "search-button" type = "submit">SEARCH</button>

</div>


</div>
</form>
</div>
<div class="container-fluid hostel-lists">
    <p id = "hostel-lists-heading text-uppercase"> @if(!empty($city))HOSTELS  From {{$city}} @else  HOSTELS @endif </p>

  <div class="row hostel-lists-container">
@if(!empty($hostels))
@foreach($hostels as $hostel)
      <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 hostel-lists-division">
        <div class="home-image-container">
          <a href = "#"><img src="{{asset('/uploads/'.$hostel['image'])}}" alt="Respective Hostel Image" srcset=""></a>
        </div>
          <div class="hostel-lists-text-section">
            <p class = "hostel-name">{{$hostel['name']}}</p>
            <p class = "hostel-address">{{$hostel['municipality']}}-{{$hostel['ward']}},{{$hostel['city']}}</p>
            <button class = "verified-container"> <img id = "verified" style = "width:15px;height:15px;" src="{{asset('images/tick.svg')}}" alt="" srcset=""> MyHostel Verified</button>
            <p>NRP:{{$hostel['price']}}</p>
            <p>@if($hostel['room']==0)
                Single Bed With Attached Bathroom
              @elseif($hostel['room']==1)
                Single Bed With non-attached Bathroom
              @elseif($hostel['room']==2)
                shared Bed With Attached Bathroom
              @else
                shared Bed With non-attached Bathroom
              @endif
                per month</p>
                <a href="/hostel/detail/{{$hostel['id']}}"><button class = "view-details">View Details</button></a>
                <a href="/hostel/detail/{{$hostel['id']}}"><button class = "book-now">Book Now</button></a>
         </div>
      </div>
      @endforeach
      @else
      <p>No Data Available</p>
      @endif
  </div>
@endsection