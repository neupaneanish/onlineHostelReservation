@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Admin Management</p>
            <a href="/admin/register"><li class = "active">Create Admin</li></a>
            <a href="/admin/show"><li>List Admins</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">      
    <div class="add-hostel">
    @if(session('status'))
      <div class = "error-display">
            <p>{{session('status')}}</p>
          </div>
          @endif
    <h3>Create Sub-Admin</h3>
    <form method="POST" action="/admin/register">
      @csrf
    <div class="admin-create-section">
        <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="name">Full Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- <input type="text" name="name" class="form-control"> -->
          </div>
          <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="email">Email-address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!-- <input type="email" name="email" class="form-control"> -->
          </div>
          <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="pass">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <!-- <input type="password" name="pass" class="form-control"> -->
          </div>
          <div class="col-lg-6 mb-3">
            <label id = "admin-social" for="pass">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <!-- <input type="password" name="pass" class="form-control"> -->
          </div>
          <div class="col-lg-6 mb-3">
            <button type="submit" class = "btn btn-primary">Create Administrator</button>
        </div>

    </div>
    </form>
</div>
</div>
</div>
</div>

@endsection