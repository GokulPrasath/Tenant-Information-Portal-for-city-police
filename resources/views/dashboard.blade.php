@extends('layouts.dashlayout')

@section('content')
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
                                   <i class="fa fa-support fa-5x"></i>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">3</div>
                                       <div>Tenants Registration</div>
                                   </div>
                               </div>
                           </div>
                           <a href="#">
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
                                       <i class="fa fa-tasks fa-5x"></i>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">5</div>
                                       <div>Police Registration</div>
                                   </div>
                               </div>
                           </div>
                           <a href="#">
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
                                       <i class="fa fa-shopping-cart fa-5x"></i>
                                   </div>
                                   <div class="col-xs-9 text-right">
                                       <div class="huge">4</div>
                                       <div>Police Stations</div>
                                   </div>
                               </div>
                           </div>
                           <a href="#">
                               <div class="panel-footer">
                                   <span class="pull-left">View Details</span>
                                   <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                   <div class="clearfix"></div>
                               </div>
                           </a>
                       </div>
                   </div>
           </div>
       </div>
  </div>
  @endsection
