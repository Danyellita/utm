<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Farmacie Online</title>
<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCupeOkafv0hwvVJNZ3oFRjc98qYzBeILo&callback=initMap"
      defer
    ></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>

  <div>
    @include('layouts.web.header')
  </div>

  <main>  
     @yield('content')
  </main>

  <div class="footer" style=" height: 40px; bottom: 0px;  width: 100%;">
     @include('layouts.web.footer')
  </div>

</body>
</html>
