@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li >Add Hostel</li></a>
            <a href="/admin/hostel"><li class = "active">Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li>Manage Images</li></a>
        </div>
      

    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
                
          <h3>Edit Hostel Room of {{$hostel->name}}</h3>
            <form method="POST" action="/admin/hostel/room/{{$room->id}}/edit" class="needs-validation mt-5" novalidate>
            @method('PATCH')
            @csrf    
            <div class="form-group row">
                    <label class="col-md-3 col-form-label text-right" for="room_no">Room No. :</label>
                    <div class="col-md-6">
                    <input type="text" name ="room_no" value="{{$room->room_no}}" class="form-control" required>
                    </div>
                    @error('room_no')
                                   
                                        <strong style="color:red">{{ $message }}</strong>
                                 
                        @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-right" for="room_type">Room Type. :</label>
                    <div class="col-md-6">
                    <select name="room_type" class="form-control" required>
                    <option value="{{$room->room_type}}">@if($room->room_type==0)Single Bed With Attached Bathroom
                            @elseif($room->room_type==1)
                            Single Bed With non-attached Bathroom
                            @elseif($room->room_type==2)
                            Multiple Bed With Attached Bathroom
                            @else
                            Multiple Bed With non-attached Bathroom
                            @endif
                    </option>
                    <option value="0">Single Bed With Attached Bathroom</option>
                    <option value="1">Single Bed With non-attached Bathroom</option>
                    <option value="2">Multiple Bed With Attached Bathroom</option>
                    <option value="3">Multiple Bed With non-attached Bathroom</option>
                    </select>
                    </div>
                    @error('room_type')
                                    
                                    <strong style="color:red">{{ $message }}</strong>
                                   
                                @enderror
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-right" for="price">Price (Rs.) :</label>
                    <div class="col-md-6">
                    <input type="number" name ="price" value="{{$room->price}}" class="form-control" required>
                    </div>
                    @error('price')
                                    
                    <strong style="color:red">{{ $message }}</strong>>
                                   
                                @enderror
                  </div>
                 
                  
             
                <button class="btn btn-primary" style="margin-left: 26%" type="submit">Submit form</button>
              </form>
              
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
        </div>
        
    </div>
</div>
</div>

@endsection