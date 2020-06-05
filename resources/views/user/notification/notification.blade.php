@extends('user.navbar.navbar')

@section('content')
<div class="container">
    @if(count($notice)>0)
    @foreach($notice as $noti)
    <div class="booking-container">
        <div class="">
            <p style = "font-weight:600;font-size:20px;">{{$noti->title}}</p>
            <p style = "font-weight:600;font-size:16px;">{{$noti->message}}</p>
        </div>

    </div>
    @endforeach
    @else
    <div class="booking-container">
        <div class="nobooking">
            <p>You are not logged in!!</p>
        </div>

    </div>
    @endif
</div>

@include('user.aboutus.footer')
@endsection
