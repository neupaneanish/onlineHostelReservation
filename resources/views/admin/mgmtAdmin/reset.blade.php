@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
    <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Admin Management</p>
            <a href="/admin/register"><li>Create Admins</li></a>
            <a href="/admin/show"><li class = "active">List Admins</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">

      <div class="add-hostel">
        <h3>Name of Administrator : Test@test.com</h3>
        <div class="form-group row">
            <label for="reset-pass" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="reset-pass" type="password" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="reset-pass-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="reset-pass-confirm" type="password" class="form-control">
            </div>
        </div>

        <div class="form-group row ">
            <div class="col-md-12 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>

    </div>
</div>
</div>
</div>

@endsection