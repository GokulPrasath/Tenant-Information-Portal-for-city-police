<!DOCTYPE html>

<html>

<head>
  <title>Tenant Information Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/jquery.dataTables.min.css" rel="stylesheet">

  <script src="js/jquery.js"></script>

  <script src="js/jquery.dataTables.min.js"></script>


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/navbar.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js" media="all"></script>
</head>

<body>
                      <nav class="navbar navbar-inverse navbar-fixed-top">
                              <div class="container-fluid">
                                <div class="navbar-header">
                                  <a class="navbar-brand" href="{{ url('/login') }}">Tenant Information portal</a>
                                </div>
                                 <div class="nav navbar-right top-nav">
                                   <ul class="nav navbar-nav">
                                   <li><img src="/uploads/avatars/{{ Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; top:10px;left=10px;border-radius=50%"><span class="caret"></span></li>
                                       <li>&nbsp;
                                         &nbsp;
                                           &nbsp;
                                             &nbsp;
                                       </li>
                                            <li class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                              </a>

                                              <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('/profile') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/password') }}"><i class="fa fa-fw fa-gear"></i>Change Password</a>
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

              <br/>
              <br/>
<div class="container col-lg-offset-3 col-lg-8 ">
    <h2 style="color:blue">Agreement Details</h2>
    <br/>
  <table id="users" class="table table-bordered table-hover table-highlight">

    <thead class="tablecss" style="color:white">

        <tr>

            <th>OwnerName</th>
						<th>TenantName</th>
            <th>AgreementNo</th>
						<th>StationArea</th>
        </tr>

    </thead>

  </table>

</div>
<script type="text/javascript">

$(document).ready(function() {

           oTable = $('#users').DataTable({

               "processing": true,

               "serverSide": true,

               "ajax": "{{ route('polreport.getposts') }}",

               "columns": [

                   {data: 'oname', name: 'oname'},

                   {data: 'tname', name: 'tname'},

                   {data: 'oagreementno', name: 'oagreementno'},

                   {data: 'ostationarea', name: 'ostationarea'},


               ]

           });

       });

</script>
</body>

</html>
