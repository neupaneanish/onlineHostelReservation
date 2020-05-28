@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li >Add Hostel</li></a>
            <a href="/admin/hostel"><li class = "active">Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li>Manage Images</li></a>
        </div>
      

    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
          <h3>Hostel Rooms</h3>
          <!-- <a href="" class="btn btn-primary">Edit Room</a> -->
          <div class="form-group row">
                  @if(!empty($rooms))
                  @foreach($rooms as $room)
                  @if($room->status==0)
                <a href="/admin/room/view/detail/{{$room->id}}" class="btn btn-success text-white col-md-1 col-sm-6 mr-2 mt-2 mb-2">{{$room->room_no}}</a>
                @else
                <a href="/admin/room/view/detail/{{$room->id}}" class="btn btn-danger text-white col-md-1 col-sm-6 mr-2 mt-2 mb-2">{{$room->room_no}}</a>
                @endif
                @endforeach
                @endif
        </div>
        </div>
        
    </div>
</div>
</div>

@endsection