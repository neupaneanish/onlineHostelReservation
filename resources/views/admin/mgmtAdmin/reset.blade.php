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
          @if(session('status'))
      <div class = "error-display">
            <p>{{session('status')}}</p>
          </div>
          @endif
        <h3>Name of Administrator : {{$admin->name}}</h3>
        <form method="post" action="/admin/password/{{$admin->id}}">
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label for="reset-pass" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
            </div>
            @error('password')
                                    <div style="text-align: center;width:100%;">
                                        <strong style="color: red;">{{ $message }}</strong>
                                        </div>
                                @enderror
        </div>
        
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirmation" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row ">
            <div class="col-md-12 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection