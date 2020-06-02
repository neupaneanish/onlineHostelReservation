@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 c0l-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Admin Management</p>
            <a href="/admin/register"><li>Create Admins</li></a>
            <a href="/admin/show"><li class = "active">List Admins</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
    @if(session('status'))

<div class="list-hostel">
  <h3>{{session('status')}}</h3>


@endif
      <div class="add-hostel">
        <h3>Admin List</h3>
        <div class="list-hostel">
            <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">S/N</th>
                    <th scope="col">Admin Name</th>
                    <th scope="col">Admin Email</th>
                    <!-- <th scope="col">Address</th> -->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                @if(!empty($admins))
                    @foreach($admins as $admin)
                    
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $admin->name }}</td>
                    <td> {{$admin->email}} </td>
                    <!-- <td> {{$admin->municipality}}-{{$admin->ward}},&nbsp;{{$admin->city}} </td> -->
                    <td>
                      <div class="row">
                      <a class = "btn btn-primary mb-1 mr-1 btn-sm" href="/admin/password/{{$admin->id}}">Change Password</a>
                      @if($admin->type=='normal')
                      <form action="/admin/delete/{{$admin->id}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class ="btn btn-danger btn-sm">Delete</button>
                     </form>
                     @endif
                     </div>
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
</div>

@endsection