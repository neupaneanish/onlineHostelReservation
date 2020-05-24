@extends('user.navbar.navbar')
@section('content')

<div class="image-container">
    <div class="image"></div>
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
<div class="container">
    <div class="row">
        <div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4">
            <div class="card-container">
                <div class="photo-container">
                    {{-- <img src="{{asset('images/bedroom1.jpg')}} " alt="" srcset=""> --}}
                </div>
                <div class="details-container">
           
                </div>
            </div>
        </div>
        <div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4">
            
        </div>
        <div class="col-12 .col-xs-12 .col-sm-12 .col-md-6 col-lg-4 col-xl-4">
            
        </div>
    </div>
</div>

@endsection