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



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-primary">
              <div class="panel panel-header"><h4>Reset Password</h4></div>
              <div class="panel panel-body">
                  @if (session('status'))
                      <div class="alert alert-info">
                          {{ session('status') }}
                      </div>
                  @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
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
