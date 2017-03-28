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
<style>

#wrapper {
    padding-left: 0;
}

#page-wrapper {
    width: 100%;
    padding: 0;
    background-color: #fff;
}

.huge {
    font-size: 50px;
    line-height: normal;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;

}
.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    line-height: 20px;
    color: #999;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #000;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    border: 1px solid rgba(0,0,0,.15);
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

ul.message-dropdown {
    padding: 0;
    max-height: 250px;
    overflow-x: hidden;
    overflow-y: auto;
}

li.message-preview {
    width: 275px;
    border-bottom: 1px solid rgba(0,0,0,.15);
}

li.message-preview>a {
    padding-top: 15px;
    padding-bottom: 15px;
}

li.message-footer {
    margin: 5px 0;
}

ul.alert-dropdown {
    width: 200px;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 51px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        overflow-y: auto;
        background-color: #222;
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #000 !important;
    }
}

.side-nav>li>ul {
    padding: 0;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    color: #999;
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}
.panel-header{
  border-color: #337ab7;
    color: #fff;
    background-color: #337ab7;
    padding:0px 15px;
}
.panel-body{
background-color:powderblue;
}
.control-label{
  color:blue;
}
.panel{
margin-bottom: 0px;
border-radius: 4px;
}
.table{
  background-color: white;
}
.modal-header{
  border-color: #337ab7;
    color: #fff;
    background-color: #337ab7;
    padding:0px 15px;
}
.tablecss{
  background-color: #337ab7;
}

</style>
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
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
