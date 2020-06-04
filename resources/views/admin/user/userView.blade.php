@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Users Management</p>
            <a href="/admin/user"><li class = "active">View Users</li></a>
    
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
      <div class="add-hostel">
        <h3>USERS LIST</h3>
        <div class="list-hostel">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name </th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @if(!empty($users))
                  @foreach($users as $user)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                      <div class="row">
                        <a class = "btn btn-primary" href ="/admin/user/view/{{$user->id}}">View Details</a>
                        <form action="/admin/user/delete/{{$user->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class = "ml-2 btn btn-danger" >Delete</button>
                      </form>
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

@endsection