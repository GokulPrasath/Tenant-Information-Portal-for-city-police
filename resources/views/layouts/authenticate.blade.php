<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
 <title>Tenant Information Portal</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}"> <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet">
   <script src="{{ asset('js/app.js') }}"></script>
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
 <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
 <script>
     window.Laravel = {!! json_encode([
         'csrfToken' => csrf_token(),
     ]) !!};
 </script>
</head>
<body>
    <div id="app">

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <nav class="navbar navbar-inverse">
                           <div class="container-fluid">
                               <div class="navbar-header">
                                <a class="navbar-brand" href="{{ url('/login') }}">Tenant Information portal</a>
                               </div>
                               <div class="nav navbar-right top-nav">
                                 <ul class="nav navbar-nav">
                                  <li class="active"><a href="{{ url('/login') }}">Home</a></li>
                                  <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i>Admin</a></li>
                                 </ul>
                              </div>
                           </div>
                        </nav>
                        @else
                        <nav class="navbar navbar-inverse navbar-fixed-top">
                                <div class="container-fluid">
                                  <div class="navbar-header">
                                    <a class="navbar-brand" href="{{ url('/login') }}">Tenant Information portal</a>
                                  </div>
                                   <div class="nav navbar-right top-nav">
                                              <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                  {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu" role="menu">
                                                  <li>
                                                      <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                  </li>
                                                  <li>
                                                      <a href="#"><i class="fa fa-fw fa-gear"></i>Password</a>
                                                  </li>
                                          <li>
                                              <a href="{{ route('logout') }}"
                                                  onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                <i class="fa fa-fw fa-power-off"></i>  Logout
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                                          </li>
                                      </ul>
                                  </li>
                                </ul>
                              </div>
                              </div>
                              <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav side-nav">
                                  <li><a href="{{ url('/agreement') }}"><i class="fa fa-fw fa-edit"></i>Agreement</a></li>
                                  <li><a href="{{ url('/polreport') }}"><i class="fa fa-fw fa-file"></i>Reports</a></li>
                               </ul>
                              </div>
                            </nav>
                        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
</body>
</html>
