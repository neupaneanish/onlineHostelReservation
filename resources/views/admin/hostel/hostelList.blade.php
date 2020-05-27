@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 c0l-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <li><a href="/admin/hostel/create">Add Hostel</a></li>
            <li class = "active"><a href="/admin/hostel">Hostels List</a></li>
            <li><a href="/admin/hostel/manageImage">Manage Images</a></li>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
    @if(session('status'))

<div class="list-hostel">
  <h3>{{session('status')}}</h3>
</div>

@endif
      <div class="add-hostel">
        <h3>Hostel List</h3>
        <div class="list-hostel">
            <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">S/N</th>
                    <th scope="col">Hostel Name</th>
                    <th scope="col">Hostel Email</th>
                    <th scope="col">Address</th>
                    <!-- <th scope="col">Phone</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Hostel Type</th> -->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @if(!empty($hostels))
                    @foreach($hostels as $hostel)
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $hostel->name }}</td>
                    <td> {{$hostel->email}} </td>
                    <td> {{$hostel->municipality}}-{{$hostel->ward}},&nbsp;{{$hostel->city}} </td>
                    <!-- <td> {{$hostel->phone}} </td>
                    <td> {{$hostel->contact}} </td>
                    <td> @if($hostel->type==0)
                          Boys Hostel
                          @elseif($hostel->type==1)
                          Girls Hostel
                          @else
                          Boys and Girls Hostel
                          @endif
                    </td> -->
                    <td>
                      <div class="row">
                      <a class = "btn btn-primary mb-1 btn-sm" href="/admin/hostel/detail/{{$hostel->id}}">Details</a>
                      <a class = "btn btn-primary ml-2 mr-2 mb-1 btn-sm" href = "/admin/hostel/edit/{{$hostel->id}}">Edit</a>
                      <form action="/admin/hostel/delete/{{$hostel->id}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class ="btn btn-danger btn-sm">Delete</button>
                     </form>
                     </div>
                    </td>
                    @endforeach
                    @endif
                  </tr>
              
                </tbody>
              </table>
              
    
        </div>
      </div>
    </div>
</div>
</div>

@endsection