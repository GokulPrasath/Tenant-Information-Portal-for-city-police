@extends('layouts.dashlayout')

@section('content')
<div id="page-wrapper">

    <form id="cpolicereg" class="form-horizontal col-lg-offset-1 col-lg-10" method="post" action="{{ url('/policereg') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="container-fluid col-lg-10">
        <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Police Registration</h3>
       </div>
        <div class="panel panel-body ">
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Police Name" required="required">
        </div>
      </div>
      <br/>
      <br/>
	  <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="badgeid">Badge Id</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="number" class="form-control" name="badgeid" id="badgeid" placeholder="Enter Badge Id" required="required">
        </div>
      </div>
      <br/>
      <br/>
	  <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="stationarea">Police Station Area</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="stationarea" id="area" placeholder="Enter Police Station Area"  required="required">
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="password">Password</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="password" class="form-control" name="password" id="passwd" placeholder="Enter Password" required="required" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-sm-2 col-md-2 col-lg-offset-4 btn-lg-2">
        <button type="submit" class="btn btn-info btn-md" onclick="myfunc()" data-target="#myModal">Submit</button>
      </div>
       </div>
     </div>
    <br/>
    <br/>
    <br/>
	</div>
    </form>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Success</h3>
          </div>
          <div class="modal-body">
            <p>Information is submitted to the Portal.....Notification is sent to Email...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
</div>
<script>

</script>
@endsection
