<!DOCTYPE html>
<html lang="en">
<head>
 <title>Tenant Information Portal</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="css/navbar.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <script type="text/javascript" src="js/jquery-3.1.1.min.js" media="all"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>


</head>
<body>
    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{ url('/login') }}">Tenant Information portal</a>
            </div>
            <div class="nav navbar-right top-nav">
            <ul class="nav navbar-nav">
              <li><img src="/uploads/avatars/{{ Auth::guard('admins')->user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px;left=10px;border-radius=50%"><span class="caret"></span></li>
                  <li>&nbsp;
                    &nbsp;
                      &nbsp;
                        &nbsp;
                  </li>
              <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{ Auth::guard('admins')->user()->name }}<b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li>
                                  <a href="/aprofile"><i class="fa fa-fw fa-user"></i> Profile</a>
                              </li>
                              <li>
                                  <a href="{{ url('/adminpassword') }}"><i class="fa fa-fw fa-gear"></i>Change Password</a>
                              </li>
                              <li class="divider"></li>
                             <li>
                                    <a href="{{ url('/admin/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-power-off"></i>Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST"
                                          style="display: none;">
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
            <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-user"></i>Admin<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="active">
                          <li >
                      <a href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="{{ url('/register') }}"><i class="fa fa-fw fa-edit"></i>Register</a>
                  </li>
                  <li>
                      <a href="{{ url('/station') }}"><i class="fa fa-fw fa-edit"></i>Police Station</a>
                  </li>
                        </ul>
                    </li>
            <li><a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-file"></i>Reports<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo1" class="active">
              <li >
          <a href="{{ url('/adminreport') }}"><i class="fa fa-fw fa-table"></i>PoliceReport</a>
      </li>
      <li>
          <a href="{{ url('/report') }}"><i class="fa fa-fw fa-table"></i>AgreementReport</a>
      </li>
            </ul>
          </li>
         </ul>
        </div>
      </nav>

	   @yield('content')

</div>
</body>
</html>
