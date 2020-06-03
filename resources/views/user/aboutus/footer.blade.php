<div class="container-fluid footer">
<div class="row footer-container">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 footer-margin">
        <div class="footer-image-container">
        <img src="{{asset('images/logo.png')}}" alt="" srcset="">
        </div>
    </div>
<?php 

use Illuminate\Support\Facades\DB;

$data = DB::table('links')->first();
?>

    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 footer-margin">
        <div class="footer-social-container">
            <p id = "social">Social Platforms</p>
            
            <div class="footer-flex">
                <a href="{{$data->facebook}}" ><img src="{{asset('images/facebook.svg')}}" alt="" srcset="">Facebook</a>
            </div>
            <div class="footer-flex">
                <a href="{{$data->instagram}}"><img src="{{asset('images/insta.svg')}}" alt="" srcset="">Instagram</a>
            </div>
            <div class="footer-flex">
                <a href="{{$data->youtube}}"><img src="{{asset('images/youtube.svg')}}" alt="" srcset="">YouTube</a>
            </div>
            <div class="footer-flex">
                <a href="{{$data->whatsapp}}"><img src="{{asset('images/watsapp.svg')}}" alt="" srcset="">Watsapp</a>
            </div>
        </div>
    </div>
</div>
</div>