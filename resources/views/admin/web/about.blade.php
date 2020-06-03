@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Web Management</p>
            <a href="/admin/web/footer"><li>Footer Management</li></a>
            <a href="/admin/web/about"><li class = "active">Aboutus Management</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
        @if(session('status'))
        <div class = "error-display">
          <p>{{session('status')}}</p>
        </div>
        @endif
            <h3>Aboutus Customization</h3>
            <form action="/admin/web/about" method="post">
            @csrf
            <!-- @method('PATCH') -->
        <div class="admin-footer-section">
            <div class="col-md-6 mb-3">
                <label class = "admin-social" for="telephone">Telephone No.</label>
                <input type="number" @if(!empty($web)) value="{{$web->tel_no}}" @endif name="tel_no" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class = "admin-social" for="mobile">Mobile No.</label>
                <input type="number" @if(!empty($web)) value="{{$web->mobile}}" @endif name="mobile" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class = "admin-social" for="mail">Mailing Address</label>
                <input type="email" name="email" @if(!empty($web)) value="{{$web->email}}" @endif class="form-control" required>
              </div> 
              <!-- <div class="col-md-6 mb-3">
                <label class = "admin-social" for="iframe">Map Iframe</label>
                <input type="text" name="iframe" class="form-control">
              </div> -->
              <!-- <div class="col-md-2 mb-3"> -->
                <button type="submit" style="margin-left:1.5%" class="col-md-2 mt-3 btn btn-primary">Save</button>
              <!-- </div> -->
        </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection