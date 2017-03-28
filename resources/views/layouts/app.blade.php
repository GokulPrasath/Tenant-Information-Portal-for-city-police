<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
 <title>Tenant Information Portal</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet">
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
 <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script>
     window.Laravel = {!! json_encode([
         'csrfToken' => csrf_token(),
     ]) !!};
 </script>
</head>
<body>
    <div id="app">

                        <nav class="navbar navbar-inverse">
                           <div class="container-fluid">
                               <div class="navbar-header">
                                <a class="navbar-brand" href="{{ url('/login') }}">Tenant Information portal</a>
                               </div>
                               <div class="nav navbar-right top-nav">
                                 <ul class="nav navbar-nav">
                                  <li><a href="{{ url('/login') }}"><i class="fa fa-user"></i>Police</a></li>
                                  <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i>Admin</a></li>
                                 </ul>
                              </div>
                           </div>
                        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
</body>
</html>
