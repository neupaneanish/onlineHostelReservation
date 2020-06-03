<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body{
            overflow:hidden;
        }
        .error-display{
            width:100%;
            background:green;
            text-align: center;
            line-height: 32px;
        }
        .error-display p{
            text-transform:uppercase;
            font-size:14px;
            font-weight:700;
            color:white;
        }
        /* admin navigation css starts  */
        .admin-navigation{
            margin:0px 40px 0px 40px !important;
        }

        .admin-navigation li{
            list-style:none;
            transition:500ms;
        }

        .admin-navigation li a:hover{
            background:#3490dc;
            color:white !important;
        }
        .admin-navigation a:nth-child(1){
            font-size:16px;
            font-weight:700;
            color:#4d4848;
            padding:8px;
        }
        .admin-navigation a:hover{
            background:#dce2f7;
        }
        .nav-item a{
            font-size:16px;
            color:#4d4848 !important;
        }
        .navbar-nav li{
            font-weight:700;
            padding:16px !important;
        }
        
        .navbar-nav li a:hover{
            background:#3490dc;
            color:white !important;
        }

        .nav-active a{
            background:#3490dc;
            color:white !important;

        }
        .user-account{
            display:flex;
            align-items: center;
        }
        .navbar-nav .user-account a:hover{
            background:transparent !important;
            color:#4d4848 !important;
        }
        .navbar-nav .user-account a{
            text-transform: capitalize;
        }
        .navbar-nav .user-account{
            padding-bottom:4px !important;
            padding-top: 4px !important;
        }
        .dropdown-menu a{
            text-align: center;
        }

        .dropdown-menu:hover{
            background:#dce2f7 !important;
        }
       .logo-container{
           height:90px;
           width:150px;
       }

       .logo-container img{
           height:100%;
           width:100%;
       }
       
     @media(max-width:993px){
            
        .admin-navigation {
            margin: 0px 0px 0px 0px !important;
        }
        .logo-container{
            width:100px;
            height:80px;
        }
        .navbar-nav li {
        font-weight: 700;
        padding: 4px !important;
        }
    }

        /* admin navigation css ends  */

    /* admin hostel css starts  */

        .active{
            background:#3490dc !important;
            color:white !important;
        }
        .active a{
            color:white !important;
        }
        
        .quick-navigation-parent{
            padding:10px 20px 20px 40px!important;
            
        }
        .quick-navigation{
            height:75vh;
            text-align:center;
            padding:0px 32px 0px 32px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        .quick-navigation h3{
            font-weight:700;
            padding-bottom:16px;
            padding-top:16px;
            color:#4d4848;
        }

        .quick-navigation p{
            font-weight:700;
            font-size:18px;
            color:#4d4848;
        }

        .quick-navigation a{
            color:#4d4848;
            font-size:14px;
           font-weight:600;
        }
        .quick-navigation a:hover{
            text-decoration:none;
            color:white;
        }
        .quick-navigation li {
            display:flex;
            justify-content: center;
            align-items: center;
            list-style:none;
            padding:8px 12px 8px 12px;
            text-decoration:none;
            background:#dce2f7;
            margin-bottom:8px;
            transition:350ms;
        }

        .quick-navigation li:hover {
           background:#3490dc;
        }
        .quick-navigation li:hover a {
           color:white;
        }

        .quick-navigation li a {
           color:#4d4848;
           text-decoration:none;
           font-size:14px;
           font-weight:600;
        }

        .left-section-container{
            height:85vh;
            overflow-y:overlay;
            padding:10px 40px 20px 20px !important;    
        }

        .left-section-container h3{
            font-weight:500;
            color:#4d4848;
            padding-bottom:16px;
        }
        .left-section-container::-webkit-scrollbar {
        width: 8px;
        }
        
        .left-section-container::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }
        
        .left-section-container::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        border-radius:8px;
        outline: 1px solid slategrey;
        }

        .add-hostel{
            padding:16px 24px!important;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }

        @media (max-width:1300px){
        .left-section-container{
            padding:20px 20px 20px 20px !important;    
        }
        .quick-navigation-parent {
            padding: 20px 10px 20px 10px!important;
        }
        }

        @media(max-width:993px){
        body{
            overflow:auto;
        }
        .quick-navigation-parent {
            padding: 20px 10px 20px 10px!important;
        }
        .left-section-container{
            overflow-y:unset;
            padding:20px 10px 20px 10px !important;    
        }
        .quick-navigation{
            height:100%;
        }
        .add-hostel{
            overflow-x:auto;
        }


        }


    /* admin hostel css ends  */

    /* admin editiamges css starts  */
    .hostel-image-container{
        height:250px;
        width:100%;
        position:relative;
        margin-bottom:64px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
     
    }
    .hostel-image-container img{
        position:absolute;
        margin:auto;
        width:100%;
        height:100%;
    }
    .image-cards:hover button{
        opacity:1;
        visibility: visible;
        z-index:5;
    }
    .image-cards:hover .image-overlay{
        opacity:0.63;
        visibility:visible;
    }
    .hostel-image-container button{
        position: absolute;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
        opacity:0;
        transition:350ms;
        visibility: hidden;
    }
    .image-overlay{
        background:black;
        position:absolute;
        top:0;
        height:250px;
        width:100%;
        opacity:0;
        visibility:none;
        transition:350ms;
    }

    .hostel-image-adding-container{
        height:300px;
        width:300px;
        margin-bottom:64px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);        display:flex;
        justify-content: center;
        align-items: center;
    }

    .hostel-image-adding-container img{
        height:100px;
        width:100px;
     
    }
    
    /* admin editiamges css ends  */

    /* admin userdetails css starts  */


    .user-details-image-container{
        height:350px;
        width:100%;
        postion:relative;
    }
    .user-details-image-container img{
        height:100%;
        width:100%;
        postion:absolute;
    }

    .info-container {
        display:flex;
    }

    .info-container p:first-child{
        font-size:16px;
        font-weight:700;
    }
    
    .info-container p:nth-child(2){
        font-size:16px;
    }
    .info-container p{
        padding-left:16px;
        padding-right:32px;
    }
    .user-details-heading{
        padding:16px;
        padding-top:4px;
    }

    /* admin userdetails css ends  */

    /* admin web footer css starts  */

      .admin-footer-section .admin-social{
          font-size:16px;
          font-weight:600;
      }


    /* admin web footer css ends  */
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid admin-navigation">
                <div class="logo-container">
                <img src="{{asset('images/logo.png')}}" alt="" srcset="">
                </div>
                <li class="nav-item">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    Dashboard
                </a>
            </li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item {{ (request()->is('admin/hostel*')) ? 'nav-active' : ''}}">
                            <a class="nav-link " href="/admin/hostel">{{ __('Hostel Management') }}</a>
                        </li>   

                        <li class="nav-item {{ (request()->is('admin/user*')) ? 'nav-active' : ''}}">
                            <a class="nav-link" href="/admin/user">{{ __('User Management') }}</a>
                        </li>  

                        <li class="nav-item {{ (request()->is('admin/web*')) ? 'nav-active' : ''}}" >
                            <a class="nav-link" href="/admin/web/about">{{ __('Web Management') }}</a>
                        </li>  
                        @if(Auth::user()->type=='super')
                        <li class="nav-item {{ (request()->is('admin/show*')) ? 'nav-active' : ''}}">   
                            <a class="nav-link" href="/admin/show">{{ __('Admin Management') }}</a>
                        </li>  
                        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown user-account">
                                <svg fill = "#4d4848" style = "height:20px;margin-bottom:4px;width:25px;" viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg"><path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/></svg>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/logout">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
