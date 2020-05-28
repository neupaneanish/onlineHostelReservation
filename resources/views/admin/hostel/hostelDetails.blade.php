@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li>Add Hostel</li></a>
            <a href="/admin/hostel"><li class = "active">Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li>Manage Images</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
        <h2 class = "user-details-heading">Hostel Details</h2>
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="user-details-image-container">
                    @if(!empty($hostel->image))
                <img src="{{asset('/uploads/'.$hostel->image)}}" alt="{{asset('/images/'.'6.jpg')}}" srcset="">
                @else
                <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                @endif
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class = "user-details-info-container">
                    <div class="info-container">
                        <p>Hostel Name      :</p>
                        <p>     {{$hostel->name}}</p>
                    </div>
                    <div class="info-container">
                        <p> Email Address   :</p>
                        <p>     {{$hostel->email}}</p>
                    </div>
                    <div class="info-container">
                        <p>City             :</p>
                        <p>     {{$hostel->city}}</p>
                    </div>
                    <div class="info-container">
                        <p>Address          :</p>
                        <p>     {{$hostel->municipality}}-{{$hostel->ward}}</p>
                    </div>
                    <div class="info-container">
                        <p>Hostel Type      :</p>
                        <p>
                            @if($hostel->type== 0 )
                            Boys Hostel
                            @elseif($hostel->type== 1 )
                            Girls Hostel
                            @else
                            Boys and Girls Hostel
                            @endif
                        </p>
                    </div>
                    <div class="info-container">
                        <p>Total no. of Rooms:</p>
                        <p>{{$hostel->totalRoom}}</p>
                    </div>
                <div class="info-container">
                        <p>Total no of Student :</p>
                        <p>200</p>
                    </div>
                    <div class="info-container">
                        <p>Description      :</p>
                        <p>{{$hostel->description}}</p>
                    </div>
                    <div class="info-container">
                        <p>Account Created      :</p>
                        <p>{{$hostel->created_at}}</p>
                    </div>
                </div>
                
                <a class = "btn btn-primary ml-2 mr-2 mb-1" href = "/admin/hostel/edit/{{$hostel->id}}">Edit</a>
                <a class = "btn btn-primary ml-2 mr-2 mb-1" href = "/admin/hostel/room/{{$hostel->id}}">Add Room</a>
                <a class = "btn btn-primary ml-2 mr-2 mb-1" href = "/admin/hostel/room/view/{{$hostel->id}}">View Room</a>

                
            </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection