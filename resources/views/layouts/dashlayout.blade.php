<!DOCTYPE html>
<html lang="en">
<head>
 <title>Tenant Information Portal</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="css/navbar.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
</head>
<body>
    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://127.0.0.1:8000/login">Tenant Information portal</a>
            </div>
            <div class="nav navbar-right top-nav">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://127.0.0.1:8000/login">Home</a></li>
              <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Admin User <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                              </li>
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="http://127.0.0.1:8000/admin"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                              </li>
                          </ul>
                      </li>
            </ul>
          </div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Admin<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                          <li >
                      <a href="http://127.0.0.1:8000/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="http://127.0.0.1:8000/policereg"><i class="fa fa-fw fa-bar-chart-o"></i>Register</a>
                  </li>
                        </ul>
                    </li>
            <li><a href="http://127.0.0.1:8000/report">Reports</a></li>
         </ul>
        </div>
      </nav>

	   @yield('content')

</div>
</body>
</html>
