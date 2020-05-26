@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li>Add Hostel</li></a>
            <a href="/admin/hostel"><li class = "active">Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li>Manage Images</li></a>
        </div>
    </div>

    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
        <h2 class = "user-details-heading">Hostel Details</h2>
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="user-details-image-container">
                <img src="{{asset('images/6.jpg')}}" alt="" srcset="">
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class = "user-details-info-container">
                    <div class="info-container">
                        <p>Full Name :</p>
                        <p>Nitesh Bahadur Thapa</p>
                    </div>
                    <div class="info-container">
                        <p>Age :</p>
                        <p>24</p>
                    </div>
                    <div class="info-container">
                        <p>Contacts :</p>
                        <p>9811111111</p>
                    </div>
                    <div class="info-container">
                        <p>Address :</p>
                        <p>Nawalparasi,Devchuli-17</p>
                    </div>
                    <div class="info-container">
                        <p>Email Address :</p>
                        <p>Niteshthapa7799@gmail.com</p>
                    </div>
                    <div class="info-container">
                        <p>Hostel Types :</p>
                        <p>Boys Hostel</p>
                    </div>
                    <div class="info-container">
                        <p>Total no. of Rooms :</p>
                        <p>32</p>
                    </div>
                    <div class="info-container">
                        <p>Account Created</p>
                        <p>2020/05/26 17:32:32</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection