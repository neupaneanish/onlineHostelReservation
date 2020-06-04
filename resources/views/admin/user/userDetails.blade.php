@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Users Management</p>
            <a href="/admin/user"><li class = "active">View Users</li></a>
    
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
        <h2 class = "user-details-heading">USER DETAILS</h2>
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="user-details-image-container">
                <img src="{{asset('images/adminUser.svg')}}" alt="" srcset="">
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class = "user-details-info-container">
                    
                    <div class="info-container">
                        <p>Full Name :</p>
                        <p>{{$user->name}}</p>
                    </div>
                    <div class="info-container">
                        <p>Email :</p>
                        <p>{{$user->email}}</p>
                    </div>
                     <div class="info-container">
                        <p>Address :</p>
                        <p>{{$user->address}}</p>
                    </div>
                    <div class="info-container">
                        <p>Mobile No: :</p>
                        <p>{{$user->mobile}}</p>
                    </div>
                    <div class="info-container">
                        <p>Gender :</p>
                        <p>{{$user->gender}}</p>
                    </div>
                    <div class="info-container">
                        <p>Date of Birth(DOB):</p>
                        <p>{{$user->dob}}</p>
                    </div>
                    
                    <!--
                    <div class="info-container">
                        <p>Address :</p>
                        <p>Nawalparasi,Devchuli-17</p>
                    </div>
                    <div class="info-container">
                        <p>Email Address :</p>
                        <p>Niteshthapa7799@gmail.com</p>
                    </div> -->
                    <div class="info-container">
                        <p>Account Created</p>
                        <p>{{$user->created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection