<!DOCTYPE html>

<html>

<head>
  <title>Tenant Information Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/jquery.dataTables.min.css" rel="stylesheet">

  <script src="js/jquery.js"></script>

  <script src="js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

      <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
  <style>

  body {
      margin-top: 100px;

  }

  @media(min-width:768px) {
      body {
          margin-top: 50px;
      }
  }

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

  /* Flot Chart Containers */

  .flot-chart {
      display: block;
      height: 400px;
  }

  .flot-chart-content {
      width: 100%;
      height: 100%;
  }

  /* Custom Colored Panels */

  .huge {
      font-size: 40px;
  }

  .panel-green {
      border-color: #5cb85c;
  }

  .panel-green > .panel-heading {
      border-color: #5cb85c;
      color: #fff;
      background-color: #5cb85c;
  }

  .panel-green > a {
      color: #5cb85c;
  }

  .panel-green > a:hover {
      color: #3d8b3d;
  }

  .panel-red {
      border-color: #d9534f;
  }

  .panel-red > .panel-heading {
      border-color: #d9534f;
      color: #fff;
      background-color: #d9534f;
  }

  .panel-red > a {
      color: #d9534f;
  }

  .panel-red > a:hover {
      color: #b52b27;
  }

  .panel-yellow {
      border-color: #f0ad4e;
  }

  .panel-yellow > .panel-heading {
      border-color: #f0ad4e;
      color: #fff;
      background-color: #f0ad4e;
  }

  .panel-yellow > a {
      color: #f0ad4e;
  }

  .panel-yellow > a:hover {
      color: #df8a13;
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
                                        <i class="fa fa-fw fa-power-off"></i>  Logout
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

              <br/>
              <br/>
<div class="container col-lg-offset-1 col-lg-3 ">
    <h2 style="color:blue">Station Area</h2>
    <br/>
  <table id="users" class="table table-bordered table-hover table-highlight">

    <thead class="tablecss" style="color:white">

        <tr>

          <th>Station Area Names</th>
          <th>Action</th>
        </tr>

    </thead>
    <tbody>
      @foreach($station as $stations)
      <tr>
      <td>{{$stations->stationarea}}</td>
      <td><a href="{{ route('delete/station',$stations->id) }}">Delete</a></td>
      @endforeach
    </tr>
    </tbody>

  </table>

</div>

<div class="container col-lg-8 ">

  <br/>
  <br/>
  <br/>
  <form class="form-horizontal col-lg-12 col-md-12 " method="post" action="{{ url('/station') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h2 class="col-lg-offset-1 "style="color:blue">Add Station Area</h2>
    <div class="col-lg-8 col-md-8 col-sm-8 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="stationarea" style="color:inherit">Station Area</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="stationarea" id="stationarea" >
      </div>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10 ">
      <br/>
      <div class="col-lg-1 col-lg-offset-4">
        <button type="submit" class="btn btn-info btn-sm" >ADD</button>
      </div>
    </div>
  </div>

</body>

</html>
