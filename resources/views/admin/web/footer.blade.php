@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Web Management</p>
            <a href="/admin/web/footer"><li class = "active">Footer Management</li></a>
            <a href="/admin/web/about"><li>Aboutus Management</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
        @if(session('status'))
        <div class = "error-display">
          <p>{{session('status')}}</p>
        </div>
        @endif
            <h3>Footer Links</h3>
            <form action="/admin/web/footer" method="post">
          @csrf
          
        <div class="admin-footer-section">
            <div class="col-md-6 mb-3">
                <label id = "admin-social" for="facebook">Facebook Link</label>
                <input type="text"  @if(!empty($link)) value="{{$link->facebook}}" @endif name="facebook" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label id = "admin-social" for="instagram">Instagram Link</label>
                <input type="text"  @if(!empty($link)) value="{{$link->instagram}}" @endif name="instagram" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label id = "admin-social" for="youtube">YouTube Link</label>
                <input type="text"  @if(!empty($link)) value="{{$link->youtube}}" @endif name="youtube" class="form-control">
              </div>
              <div class="col-md-6 mb-3">
                <label id = "admin-social" for="watsapp">Watsapp Link</label>
                <input type="text"  @if(!empty($link)) value="{{$link->whatsapp}}" @endif name="whatsapp" class="form-control">
                @if(session('message'))
                <strong style="color: red;">{{session('message')}}</strong>
              @endif
              </div>
             
              <button type="submit" style="margin-left:1.5%" class="col-md-2 mt-3 btn btn-primary">Save</button>
        </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection