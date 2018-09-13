<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Demolablaze@gmail.com">

         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/creative.min.css" rel="stylesheet">


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

    
      <!-- Navigation -->
      <div>                                              
            @include('includes.nav')
           </div>
               
                                                      
          @include('includes.header')
           
        <div class="content">     
            @yield('content')
        </div>
   



           <div>                                              
                   @include('includes.footer')
                  </div>






               <!-- Bootstrap core JavaScript -->
               <script src="vendor/jquery/jquery.min.js"></script>
               <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
           
               <!-- Plugin JavaScript -->
               <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
               <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
               <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
           
               <!-- Custom scripts for this template -->
               <script src="js/creative.min.js"></script>
           
     </div>
 </body>
</html>