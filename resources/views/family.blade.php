@extends('layouts.authenticate')

@section('content')
<div id="page-wrapper">
  <br/>
  <br/>
  <br/>
  <br/>
  <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-lg-10 col-md-10 " method="post" action="{{ url('/family') }}" >
      <div class="container-fluid">
      <div class="panel panel-primary">
      <div class="panel panel-header">
      <h3>Tenant information</h3>
     </div>
      <div class="panel panel-body">
      <!--  ----->
      <div class="col-lg-10 col-md-10 col-sm-10">
<div class="table-responsive col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8" >
      <table class="table table-bordered table-condensed table-highlight" >
          <thead class="tablecss" style="color:white">
              <th>Name</th>
              <th>Gender</th>
              <th>Age</th>
              <th>Relation</th>
          </thead>
          <tbody id="tdetails">
              <tr>
                  <td><input name="ten[1]" type="text" class="form-control"/></td>
                  <td>
                      <select name="ten[1]" class="form-control">
                          <option>male</option>
                          <option>female</option>
                      </select>
                  </td>
                  <td><input type="text" name="ten[1]" class="form-control" /></td>
                  <td><input type="text" name="ten[1]"class="form-control" /></td>
              </tr>
          </tbody>
      </table>
  </div>
  <div class="col-sm-1 col-md-1 col-lg-1">
    <button type="submit" class="btn btn-info btn-sm " id="adduser">ADD</button>
  </div>
</div>
    <!--  ----->
    </div>
    </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-sm-10 col-md-10 col-lg-10">
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1">
      <button type="submit" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Submit</button>
    </div>

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
    <br/>
    <br/>
    <br/>
    </form>
    <script>
    $(function(){
      var i = 2;
      $('#adduser').click(function(){
        $('#tdetails').append('<tr><td><input type="text" name="ten[' + i +']"  class="form-control"/></td><td><select class="form-control" name="ten[' + i +']" ><option>male</option><option>female</option></select></td><td><input type="text" name="ten[' + i +']" class="form-control" /></td><td><input type="text" name="ten[' + i +']" class="form-control" /></td></tr>');
      i++;
      });
    });
    </script>
	</div>
@endsection
