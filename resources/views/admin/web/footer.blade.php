@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Web Management</p>
            <a href="/admin/hostel/create"><li class = "active">Footer Management</li></a>
            <a href="/admin/hostel"><li>Aboutus Management</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
            <h3>Footer Links</h3>
        <div class="admin-footer-section">
            <div class="col-md-6 mb-3">
                <label id = "admin-social" for="facebook">Facebook Link</label>
                <input type="text" name="facebook" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label id = "admin-social" for="instagram">Instagram Link</label>
                <input type="text" name="instagram" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label id = "admin-social" for="youtube">YouTube Link</label>
                <input type="text" name="youtube" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label id = "admin-social" for="watsapp">Watsapp Link</label>
                <input type="text" name="watsapp" class="form-control">
              </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection