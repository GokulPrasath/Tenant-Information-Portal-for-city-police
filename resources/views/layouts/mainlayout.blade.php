<!DOCTYPE html>
<html lang="en">
<head>
 <title>Tenant Information Portal</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet">
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
</head>
<body>
<div id="mainlayout">
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
      @yield('content')
    </div>
  </body>
</html>
