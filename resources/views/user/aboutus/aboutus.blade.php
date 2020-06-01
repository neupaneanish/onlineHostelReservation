@extends('user.navbar.navbar')
@section('content')
<div class="container-fluid aboutus">
    <div class="aboutus-wrapper">
    <div class="row aboutus-responsive-flex">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 aboutus-left-section">
            <div class="about-text-section">
                <p id = "about-h1">
                    ABOUT US
                </p>
                <p>MyHostel.com is the company founded in 2020 with the sole purpose of providing its services
                to the people who are in dire need of hostel services. It is mainly designed to help the need of 
                students that are away from their home for their study. It aims at solving the problems of many student
                who find it difficult to fint appropiate hostels as per their budget and needs.
                </p>
                <p id = "aboutus-features">Features</p>
                <li id = "aboutus-li">Provide hostel services at lower cost.</li>
                <li id = "aboutus-li">Consumer friendly.</li>
                <li id = "aboutus-li">Hassle Free booking and Cancellation.</li>
                <li id = "aboutus-li">We only let hostels to get registerd with us that meet our standard and regulations.</li>
                <li id = "aboutus-li">Hostel room as per your needs.</li>
            </div>
            <p id = "aboutus-amenities">Amenities</p>
            <div class="feature-container">
                <div class="feature-wrapper">
                        <span>
                        <img src="{{asset('images/general.svg')}}" alt="" srcset="">
                        </span>
                        <span>
                            fan
                        </span>
                    </div>
                <div class="feature-wrapper">
                    <span>
                    <img src="{{asset('images/wifi.svg')}}" alt="" srcset="">
                    </span>
                    <span>
                        Free Wifi
                    </span>
                </div>  
                
                <div class="feature-wrapper">
                    <span>
                    <img src="{{asset('images/geyser.svg')}}" alt="" srcset="">
                    </span>
                    <span>
                        Geyser
                    </span>
                </div>
            
                <div class="feature-wrapper">
                    <span>
                    <img src="{{asset('images/parking.svg')}}" alt="" srcset="">
                    </span>
                    <span>
                        Free Parking
                    </span>
                </div>
            
                <div class="feature-wrapper">
                    <span>
                    <img src="{{asset('images/powerbackup.svg')}}" alt="" srcset="">
                    </span>
                    <span>
                        Power backup
                    </span>
                </div>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 aboutus-contact-card">
        <div class="aboutus-test">
        <p id = "corporate">Corporate Office</p>
        <div class="aboutus-image-container">
        <img src="{{asset('images/office.svg')}}" alt="" srcset="">
        </div>
        <div class="aboutus-text-container">
            <p>Kathmandu</p>
            <p>New Baneshwor, Kathmandu</p>
            <div class = "align-content">
            <img src="{{asset('images/phone.svg')}}" alt="" srcset="">
            <a href = "tel:+9779812345678">+977981234567
            </div>
            <div class = "align-content">
            <img src="{{asset('images/smartphone.svg')}}" alt="" srcset="">
            <a href = "tel:+9779812345678">+9779812345678</a>
            </div>
            <div class = "align-content">
            <img style = "width:25px;height:25px;"src="{{asset('images/mail.svg')}}" alt="" srcset="">
            <a href="mailto:sales@myhostel.com">sales@myhostel.com</a>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="map">
    <p>Site Map of Our HeadOffice</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2644547849773!2d85.32375631490152!3d27.709119982791076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDQyJzMyLjgiTiA4NcKwMTknMzMuNCJF!5e0!3m2!1sen!2snp!4v1590933955012!5m2!1sen!2snp"
     frameborder="0" style="border:0;"
     allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

</div>
</div>
<div class="container-fluid footer">
<div class="row footer-container">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 footer-margin">
        <div class="footer-image-container">
        <img src="{{asset('images/logo.png')}}" alt="" srcset="">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 footer-margin">
        <div class="footer-social-container">
            <p id = "social">Socil Platforms</p>
            <div class="footer-flex">
                <a href="#"><img src="{{asset('images/facebook.svg')}}" alt="" srcset="">Facebook</a>
            </div>
            <div class="footer-flex">
                <a href="#"><img src="{{asset('images/insta.svg')}}" alt="" srcset="">Instagram</a>
            </div>
            <div class="footer-flex">
                <a href="#"><img src="{{asset('images/youtube.svg')}}" alt="" srcset="">YouTube</a>
            </div>
            <div class="footer-flex">
                <a href="#"><img src="{{asset('images/watsapp.svg')}}" alt="" srcset="">Watsapp</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection