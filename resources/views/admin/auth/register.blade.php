<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
 <title>Tenant Information Portal</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

     <!-- Styles -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet"> <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
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

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('badgeid') ? ' has-error' : '' }}">
                            <label for="badgeid" class="col-md-4 control-label">BadgeId</label>

                            <div class="col-md-6">
                                <input id="badgeid" type="number" class="form-control" name="badgeid" value="{{ old('badgeid') }}" required autofocus>

                                @if ($errors->has('badgeid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('badgeid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Police Image</label>

                            <div class="col-md-6">
                                <input id="area" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}" required autofocus>

                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-sign-in"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Scripts -->
</body>
</html>
