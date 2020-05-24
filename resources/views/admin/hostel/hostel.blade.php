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
        <div class="add-hostel">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom01">Organization Name:</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Organization Name" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                 
                  <div class="col-md-12 mb-3">
                    <label for="validationCustomUsername">Organization Email:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="email@email.com" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">City</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Municipality:</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Municipality" required>
                    <div class="invalid-feedback">
                      Please provide a valid Municipality.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Ward:</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Ward" required>
                    <div class="invalid-feedback">
                      Please provide a ward.
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div> -->
                <button class="btn btn-primary" type="submit">Submit form</button>
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