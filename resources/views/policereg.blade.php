@extends('layouts.dashlayout')

@section('content')
<div id="page-wrapper">

    <form id="cpolicereg" class="form-horizontal col-lg-offset-1 col-lg-10" action="{{ url('/policereg') }}">
	<div class="container-fluid col-lg-10">
        <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Police Registration</h3>
       </div>
        <div class="panel panel-body ">
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" placeholder="Enter Police Name" required="required">
        </div>
      </div>
      <br/>
      <br/>
	  <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="bgid">Badge Id</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="bgid" id="bgid" placeholder="Enter Badge Id" required="required">
        </div>
      </div>
      <br/>
      <br/>
	  <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="area">Police Station Area</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="area" id="area" placeholder="Enter Police Station Area"  required="required">
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-10 col-md-10 col-sm-10 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="passwd">Password</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Enter Password" required="required" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-sm-2 col-md-2 col-lg-offset-4 btn-lg-2">
        <button type="submit" class="btn btn-info btn-md" onclick="myfunc()" data-keyboard="true" data-backdrop="true" data-controls-modal="leave_modal" data-target="#myModal">Submit</button>
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
function myfunc() {
var x,w,y,z;
x = document.getElementById("name").value;
y = document.getElementById("bgid").value;
z = document.getElementById("passwd").value;
w = document.getElementById("area").value;
if(x==""||y==""||z==""||w=="")
{
$("cpolicereg").validate();
}
else {
  $('#myModal').modal("show");
 }
}
</script>
@endsection
