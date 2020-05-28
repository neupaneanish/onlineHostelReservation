@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li>Add Hostel</li></a>
            <a href="/admin/hostel"><li>Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li class = "active">Manage Images</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
        <h2 class = "user-details-heading">Hostel Room Details</h2>
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="user-details-image-container">
                <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class = "user-details-info-container">
                    @if(!empty($rooms))
                    @foreach($rooms as $room)
                <div class="info-container">
                        <p>Hostel Name:</p>
                        <p> {{$room->name}}</p>
                    </div>   
                <div class="info-container">
                        <p>Hostel Room No.:</p>
                        <p> {{$room->room_no}}</p>
                    </div>
                    <div class="info-container">
                        <p>Room Type :</p>
                        <p>
                        @if($room->room_type==0) 
                        Single Bed With Attached Bathroom
                        @elseif($room->room_type==0)
                        Single Bed With non-attached Bathroom 
                        @elseif($room->room_type==0)
                        Multiple Bed With Attached Bathroom
                        @else
                        Multiple Bed With non-attached Bathroom
                        @endif 
                        </p>
                    </div>
                    <div class="info-container">
                        <p>Price             :</p>
                        <p>     {{$room->price}}</p>
                    </div>
                    @endforeach
                    @endif
                    
                </div>
                @if(!empty($rooms))
                    @foreach($rooms as $room)
                    <div class="row mt-5">
                <a class = "btn btn-primary ml-2 mr-2 mb-1" href = "/admin/hostel/edit/{{$room->roomId}}">Edit</a>
                <a class = "btn btn-primary ml-2 mr-2 mb-1" href = "/admin/hostel/room/{{$room->hostel}}">Add Room</a>
                <a class = "btn btn-primary ml-2 mr-2 mb-1" href = "/admin/hostel/room/view/{{$room->hostel}}">View Room</a>
                <form action="/admin/hostel/room/delete/{{$room->hostel}}" method="post">
                @method('DELETE')
                <button type="submit" class = "btn btn-danger ml-2 mr-2 mb-1" href = "/admin/hostel/room/delete/{{$room->hostel}}">Delete</button>    
            </form>
            </div>
                @endforeach
                @endif
        </div>
    </div>
    </div>
</div>
</div>

@endsection