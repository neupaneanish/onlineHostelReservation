@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <li><a href="">Add Hostel</a></li>
            <li><a href="">Hostels List</a></li>
            <li class = "active"><a href="">Manage Images</a></li>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
      <div class="add-hostel">
        <h3>--Name of the Organization</h3>
        <div class="list-hostel">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 image-cards">
                <div class="hostel-image-container">
                    <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                    <div class="image-overlay"></div>
                    <button class = "btn btn-danger">Delete</button>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 image-cards">
                <div class="hostel-image-container">
                    <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                    <div class="image-overlay"></div>
                    <button class = "btn btn-danger">Delete</button>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 image-cards">
                <div class="hostel-image-container">
                    <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                    <div class="image-overlay"></div>
                    <button class = "btn btn-danger">Delete</button>

                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 image-cards">
                <div class="hostel-image-container">
                    <img src="{{asset('images/bedroom1.jpg')}}" alt="" srcset="">
                    <div class="image-overlay"></div>
                    <button class = "btn btn-danger">Delete</button>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="hostel-image-adding-container">
                <a href = "#"><img src="{{asset('images/more.svg')}}" alt="" srcset=""></a>
                </div>
            </div>
        </div>
              
    
        </div>
      </div>
    </div>
</div>
</div>

@endsection