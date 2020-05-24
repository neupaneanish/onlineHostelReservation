<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hostel.com</title>
<link rel="stylesheet" href="{{asset('css/home.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style>
      body{
        overflow-x:hidden;
      }
        .navigation-behind-navbar{
    width:100%;
    height:10vh;
    background:#f4f5f6;
    position:absolute;
}
.navigation-bar{
    position:absolute;
    left:50%;
    transform:translate(-50%);
    padding:0px;
}
.navigation {
  padding: 24px 40px;
  box-shadow: 2px 4px 6px 2px rgba(0,0,0,.1), 0 12px 11px 2px rgba(0,0,0,.1);

}


.navigation {
  position: relative;
  display: flex;
  flex-direction:row-reverse;
  align-items: center;
  z-index: 10;
  background-color: white;
}
.navigation h2{
  margin-left:auto;
}
.navigation h1 {
  text-transform: uppercase;
  font-size: 16px;
  letter-spacing: 2px;
}

.navigation button {
  border: none;
  background: none;
  cursor: pointer;
  opacity: 0.8;
  margin-right: auto;
  outline: none;
}

.navigation button,
.navigation ul {
  margin-right: auto;
}

.navigation button:hover {
  opacity: 1;
}

.navigation button span {
  height: 2px;
  background-color: rgb(68, 68, 68);
  width: 20px;
  display: block;
  border-radius:8px;
  margin-top: 4px;
}

.navigation button span:first-child {
  width: 15px;
  border-radius:8px;
}

.navigation button span:last-child {
  width: 15px;
  border-radius:8px;
}

nav ul {
  display: none;
}

.navigation ul li {
  display: inline-block;
  list-style:none;
}

.navigation ul li a {
  font-size: 14px;
  color: #222;
  text-transform: uppercase;
  text-decoration: none;
  margin-left: 24px;
  font-weight: bold;
  letter-spacing: 2px;
}

.responsive-nav {
  position: absolute;
  top: -100%;
  padding:32px 0px;
  width:100%;
  background-color: white;
  list-style:none;  	
  box-shadow: 0px 2px 5px rgba(34, 34, 34, 0.075);
  transition: all 500ms ease-out;
  z-index: 1;
}


.responsive-nav li a {
  display: block;
  margin-top:16px;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  list-style:none !important;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: bold;
}

.responsive-nav-active {
  list-style:none;
  top: 100% !important;
}

@media (min-width: 1024px) {
  nav button,
  .responsive-nav {
    display: none;
  }
  nav ul {
    display: block;
  }
  .container {
    padding: 32px 0px;
  }

}

    </style>
</head>
<body>
    <div>
        <div class = "navigation-behind-navbar">
        
        </div>
        <div class="container navigation-bar">
            <nav class="navigation">
            {{-- <h2>@</h2> --}}
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
                <h1>Navigation Bar</h1>
                <button id="navbar-button">
                <span></span>
                <span></span>
                <span></span>
                </button>
                <ul class = "non-responsive">
                    <li><a href="#">home</a></li>
                    <li><a href="#">hostels</a></li>
                    <li><a href="#">my bookings</a></li>
                    <li><a href="#">about us</a></li>
                </ul>
            </nav>
            <div class="responsive-container">
            <ul class="responsive-nav">
                <li><a href="#">home</a></li>
                <li><a href="#">hostels</a></li>
                <li><a href="#">my bookings</a></li>
                <li><a href="#">about us</a></li>
            </ul>
            </div>
        </div>
        <script>
            init();
            function init(){
            let navbarButton = document.querySelector("#navbar-button");
            let responsiveNav = document.querySelector('.responsive-nav');
            navbarButton.addEventListener('click', e => {
                responsiveNav.classList.toggle('responsive-nav-active')
            });
            }
        </script>
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
