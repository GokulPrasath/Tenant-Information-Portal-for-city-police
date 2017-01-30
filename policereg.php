<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registration Form</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="css/navbar.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://localhost/tenant/index.html">Tenant Information portal</a>
            </div>
            <div class="nav navbar-right top-nav">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost/tenant/login.php">Home</a></li>
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
                                  <a href="http://localhost/tenant/admin.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                      <a href="http://localhost/tenant/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="http://localhost/tenant/policereg.php"><i class="fa fa-fw fa-bar-chart-o"></i>Register</a>
                  </li>
                        </ul>
                    </li>
            <li><a href="http://localhost/tenant/report.php">Reports</a></li>
         </ul>
        </div>
      </nav>

<div id="page-wrapper">
  <div class="container-fluid">
    <form class="form-horizontal col-lg-offset-1 col-lg-10">
        <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Police Registration</h3>
       </div>
        <div class="panel panel-body ">
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <br/>
      <br/>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Badge Id</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <br/>
      <br/>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Station Area</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-sm-2 col-md-2 col-lg-offset-4 btn-lg-2">
        <button type="submit" class="btn btn-success btn-md">Submit</button>
      </div>
       </div>
     </div>
    <br/>
    <br/>
    <br/>
    </form>
</div>
</div>
</body>
</html>
