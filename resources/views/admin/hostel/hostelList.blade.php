@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div style = "height:100vh;" class="col-sm-6 c0l-md-4 col-lg-3">
        <div class="quick-navigation">
            <h2>Quick Navigation</h2>
            <h4>Hostel Management</h4>
            <li><a href="">Add Hostel</a></li>
            <li><a href="">Hostels List</a></li>
        </div>
    </div>

    <div class="col-sm-6 col-md-8 col-lg-9 ">
        <div class="list-hostel">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
              
    
        </div>
        
    </div>
</div>
</div>

@endsection