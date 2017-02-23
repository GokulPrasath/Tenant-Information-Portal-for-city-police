<!DOCTYPE html>
<html lang="en">
<head>
 <title>Tenant Information Portal</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
</head>
<body>
<div id="mainlayout">
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
         <a class="navbar-brand" href="http://127.0.0.1:8000/login">Tenant Information portal</a>
        </div>
        <div class="nav navbar-right top-nav">
          <ul class="nav navbar-nav">
           <li class="active"><a href="http://127.0.0.1:8000/login">Home</a></li>
           <li><a href="http://127.0.0.1:8000/admin">Admin</a></li>
          </ul>
       </div>
    </div>
 </nav>
      @yield('content')
    </div>
  </body>
</html>
