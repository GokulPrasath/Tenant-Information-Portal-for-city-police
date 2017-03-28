@extends('layouts.dashlayout')

@section('content')
<script>

</script>
<div id="page-wrapper">
  <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h2 class="page-header">
                            Statistics
                       </h2>
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-4 col-md-4">
                       <div class="panel panel-primary">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                   <i class="fa fa-list-ul fa-5x"></i>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">{{ number_format(\App\Agreement::tcount()) }}</div>
                                       <div>Agreements Registration</div>
                                   </div>
                               </div>
                           </div>
                           <a href="/report">
                               <div class="panel-footer">
                                   <span class="pull-left">View Details</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfix"></div>
                               </div>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4">
                       <div class="panel panel-green">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                       <i class="fa fa-list-ul fa-5x"></i>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">{{ number_format(App\User::ucount()) }}</div>
                                       <div>Police Registration</div>
                                   </div>
                               </div>
                           </div>
                           <a href="/adminreport">
                               <div class="panel-footer">
                                   <span class="pull-left">View Details</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfix"></div>
                               </div>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4">
                       <div class="panel panel-yellow">
                           <div class="panel-heading">
                               <div class="row">
                                   <div class="col-xs-3">
                                       <i class="fa fa-list-ul fa-5x"></i>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">{{ number_format(App\Station::scount()) }}</div>
                                       <div>Police Stations</div>
                                   </div>
                               </div>
                           </div>
                           <a href="/station">
                               <div class="panel-footer">
                                   <span class="pull-left">View Details</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfix"></div>
                               </div>
                           </a>
                       </div>
                   </div>
           </div>

<br/>
<br/>
<br/>


        <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-red">
                  <div class="panel-heading">
                      <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>Agreements Registrations</h3>
                  </div>
                  <div class="panel-body">
            <div id="linechart" style="width: 1000px; height: 500px"></div>
                  </div>
              </div>
          </div>
      </div>
      <br/>

</div>
  </div>

<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/loader.js"></script>

<script type="text/javascript">

  var visitor = <?php echo $visitor; ?>;

  console.log(visitor);

  google.charts.load('current', {'packages':['corechart', 'line']});

  google.charts.setOnLoadCallback(drawChart);


  function drawChart() {

    var data = google.visualization.arrayToDataTable(visitor);

    var options = {

      hAxis: {
                title: 'Date'

              },
              vAxis: {
                title: 'Register Counts',
                format: '0',
                viewWindow:{
            min:0,
            max:10
          }
              },
      curveType: 'function',

      legend: { position: 'bottom' }

    };

    var chart = new google.visualization.LineChart(document.getElementById('linechart'));

    chart.draw(data, options);

  }

</script>
  @endsection
