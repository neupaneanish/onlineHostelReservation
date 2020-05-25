@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 c0l-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <li><a href="">Add Hostel</a></li>
            <li><a href="">Hostels List</a></li>
            <li class = "active"><a href="">Manage Images</a></li>
        </div>
    </div>

    <div class="col-sm-6 col-md-8 col-lg-9 left-section-container">
      <div class="add-hostel">
        <h3>Manage Images</h3>
        <div class="list-hostel">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <a class = "btn btn-primary" href = "#">Add Image</a>
                      <a class = "btn btn-danger" href = "#">Edit Image</a>

                    </td>
                  </tr>
              
                </tbody>
              </table>
              
    
        </div>
      </div>
    </div>
</div>
</div>

@endsection