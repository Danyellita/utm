<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UTM</title>
    {{-- <link rel="shortcut icon" href="{{ URL::asset('img/orto-favicon.png') }}"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/newstyle.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCupeOkafv0hwvVJNZ3oFRjc98qYzBeILo&callback=initMap"
      defer
    ></script>
    {{-- <script src="{{ asset('js/scripts.js') }}" defer></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    
</head>

<body class="fixed-nav sticky-footer">
    <nav class="navbar navbar-expand-md  fixed-top" style="height:70px; box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1); background:#A9A9A9;">
        <ul class="navbar-nav mr-auto" >
            <li>
              <img src="https://proiecte.utm.md/wp-content/uploads/sites/17/2017/11/UTM_LOGO.png" style="width: 30%; padding-bottom: 10px;">
            </li>
            
        </ul>

        <!-- Right Side Of Navbareeeee -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
            @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color:black;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    </nav>

   <div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="{{ route('manage.users.create') }}">Users</a>
  <a href="{{ route('manage.sectors.index') }}">Sectors</a>
  <a href="#about">Streets</a>
  <a href="#about">PharmacyAddresses</a>
  <a href="#about">Pharmacy</a>
  <a href="{{ route('manage.categories.create') }}">Categories</a>
  <a href="#about">Products</a>
  <a href="#about">Prices</a>
</div>
<div class="content-wrapper rounded" style="margin-left:250px; padding-top: 1rem; margin-right: 50px;">

        <div class="container-fluid pb-2">
          @yield('content') 

        </div>
  
</div>
   
   

</body>
</html>