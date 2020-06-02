@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li>Add Hostel</li></a>
            <a href="/admin/hostel"><li>Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li class = "active">Manage Images</li></a>
        </div>
    </div>

    <div class="col-sm-6 col-md-8 col-lg-9 left-section-container">
      <div class="add-hostel">
        <div class = "error-display">
          <p>Error occured!!</p>
        </div>
        <h3>Manage Images</h3>
        <div class="list-hostel">
            <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">S/N</th>
                    <th scope="col">Hostel Name</th>
                    <!-- <th scope="col">Hostel Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Hostel Type</th> -->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($hostels))
                    @foreach($hostels as $hostel)
                  <tr>
                    <th class="fw-600">{{$loop->iteration}}</th>
                    <td class="fw-600">{{ $hostel->name }}</td>
                    <!-- <td class="fw-600"> {{$hostel->email}} </td>
                    <td scope="col"> {{$hostel->city}}&nbsp;{{$hostel->municipality}}-{{$hostel->ward}} </td>
                    <td scope="col"> {{$hostel->phone}} </td>
                    <td scope="col"> {{$hostel->contact}} </td>
                    <td class="fw-600"> @if($hostel->type==0)
                          Boys Hostel
                          @elseif($hostel->type==1)
                          Girls Hostel
                          @else
                          Boys and Girls Hostel
                          @endif
                    </td> -->
                    <td class="fw-600">
                      <a class = "btn btn-primary btn-sm " href = "/admin/hostel/addImage/{{$hostel->id}}">Add Image</a>
                      <a class = "btn btn-primary btn-sm" href = "/admin/hostel/images/{{$hostel->id}}">View Image</a>

                    </td>
                    
                  </tr>
                  @endforeach
                    @endif             
                </tbody>
              </table>
              
    
        </div>
      </div>
    </div>
</div>
</div>

@endsection