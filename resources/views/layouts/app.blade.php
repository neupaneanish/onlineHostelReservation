<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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

    <style>
        .logo-image{
            height:75px;
            width:140px;
            position:relative;
            margin:16px;
        }

        .logo-image img{
            position:absolute;
            height:100%;
            width:100%;
        }
        .login-card{
            box-shadow: 0 7px 14px rgba(52,144,220,0.25), 0 5px 5px rgba(52,144,220,0.22);
            padding:40px;
            transition:250ms;
        }
        .login-card:hover{
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        .card-header{
            background:white;
            font-size:20px;
            font-weight:700;
            text-align: center;
            border-bottom:none !important;  
        }

        .login-button{
            width:100%;
            padding-top:12px;
            padding-bottom:12px;
        }

        .custom-form-group{
            margin-bottom:16px;
        }
        
        .custom-form-group label{
            font-size:16px;
            font-weight:600;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="logo-image">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" alt="" srcset="">
            </a>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
