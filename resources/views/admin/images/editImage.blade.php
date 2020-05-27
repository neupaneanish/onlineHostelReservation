@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-6 c0l-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li>Add Hostel</li></a>
            <a href="/admin/hostel"><li>Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li class = "active">Manage Images</li></a>
        </div>
    </div>

    <div class="col-sm-6 col-md-8 col-lg-9 left-section-container">
      <div class="add-hostel">
        <h3>{{$hostel->name}}</h3>
        <div class="list-hostel">
        <div class="row">
        <form action="/admin/hostel/addImage" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                <input type="hidden" name="id" value='{{$hostel->id}}'>
                <!-- <label for="image"> Images </label> -->
                                <div class="form-group">
                                    <input type="file" name="image[]" class="form-control" id="images" multiple />

                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"> Upload Images </button>
                        </div>
      
      
               

        </form>
        </div>
              
    
        </div>
      </div>
    </div>
</div>
</div>

@endsection