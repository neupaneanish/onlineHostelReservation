@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Web Management</p>
            <a href="/admin/hostel/create"><li>Footer Management</li></a>
            <a href="/admin/hostel"><li class = "active">Aboutus Management</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
            <h3>Aboutus Customization</h3>
        <div class="admin-footer-section">
            <div class="col-md-6 mb-3">
                <label class = "admin-social" for="telephone">Telephone No.</label>
                <input type="text" name="telephone" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label class = "admin-social" for="mobile">Mobile No.</label>
                <input type="text" name="mobile" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label class = "admin-social" for="mail">Mailing Address</label>
                <input type="text" name="mail" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label class = "admin-social" for="iframe">Map Iframe</label>
                <input type="text" name="iframe" class="form-control">
              </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection