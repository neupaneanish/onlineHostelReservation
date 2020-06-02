@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Admin Management</p>
            <a href="#"><li class = "active">Create Admins</li></a>
            <a href="#"><li>List Admins</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">      
    <div class="add-hostel">
    <h3>Create Sub-Admin</h3>
    <div class="admin-create-section">
        <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="name">Full Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="address">Email-address</label>
            <input type="e-mail" name="address" class="form-control">
          </div>
          <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="pass">Password</label>
            <input type="password" name="pass" class="form-control">
          </div>
          <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="pass">Confirm Password</label>
            <input type="password" name="pass" class="form-control">
          </div>
          <div class="col-lg-6 mb-3">
            <button class = "btn btn-primary">Create Administrator</button>
        </div>

    </div>
</div>
</div>
</div>
</div>

@endsection