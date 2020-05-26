@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 c0l-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <li><a href="/admin/hostel/create">Add Hostel</a></li>
            <li><a href="/admin/hostel">Hostels List</a></li>
            <li class = "active"><a href="/admin/hostel/manageImage">Manage Images</a></li>
        </div>
    </div>

    <div class="col-sm-6 col-md-8 col-lg-9 left-section-container">
      <div class="add-hostel">
        <h3>--{{$name->name}}</h3>
        <div class="list-hostel">
        <div class="row">
            @if(!empty($images))
            @foreach($images as $image)
            <!-- <p>{{$image->image}}</p> -->
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 image-cards">
                <div class="hostel-image-container">
                    <img src="{{asset('/uploads/'.$image->image)}}" alt="" srcset="">
                    <!-- <img src="{{asset('uploads/$image')}}" alt="" srcset=""> -->
                    <div class="image-overlay"></div>
                    <button class = "btn btn-danger">Delete</button>
                </div>
            </div>
            @endforeach
            @endif
          
        </div>
              
    
        </div>
      </div>
    </div>
</div>
</div>

@endsection