@extends('layouts.policelayout')

@section('content')
<script type="text/javascript" src="js/adduser.js" media="all"></script>
<div id="page-wrapper"
  <form class="form-horizontal col-lg-12 col-md-12 ">
      <div class="container-fluid">
        <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Owner information</h3>
       </div>
        <div class="panel panel-body ">
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="oname" id="name" >
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="mobno">Mobile No</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="number" class="form-control" name="omobno" id="mobno" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="address">Address</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <textarea class="form-control" rows="3" name="oaddress" id="address" ></textarea>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="email">Email</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="email" class="form-control" name="oemail" id="email" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="identity">Identity Proof</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="file" class="form-control" name="oidentity" id="identity" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="authority">Authority Person</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="oauthority" id="authority">
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="propdoc">Property documents</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="file" class="form-control" name="opropimg" id="propdoc" >
        </div>
       </div>
       <br/>
       <br/>
       <br/>
       <div class="col-lg-5 col-md-6 col-sm-6 ">
         <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="rentno">Rental Agreement No</label>
         <div class="col-lg-8 col-md-8 col-sm-8 ">
             <input type="number" class="form-control" name="orentno" id="rentno" >
         </div>
       </div>
       <div class="col-lg-5 col-md-6 col-sm-6 ">
         <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="policeno">Police Badge No</label>
         <div class="col-lg-8 col-md-8 col-sm-8 ">
             <input type="number" class="form-control" name="opoliceno" id="policeno" >
         </div>
       </div>
       </div>
     </div>
	   <br/>
      <div class="panel panel-primary">
      <div class="panel panel-header">
      <h3>Tenant information</h3>
     </div>
      <div class="panel panel-body">
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="tname" id="name" >
      </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="mobno">Mobile No</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="number" class="form-control" name="tmobno" id="mobno" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="address">Address</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <textarea class="form-control" rows="3" name="taddress" id="address" ></textarea>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="email">Email</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="email" class="form-control" name="temail" id="email" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="identity">Identity Proof</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="file" class="form-control" name="tidentity" id="identity" >
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="tenantpic">Tenant Photo</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="ttenantpic" id="tenantpic">
        </div>
      </div>
      <br/>
      <br/>
      <br/>
      <h4 style="color:blue">Tenant Family Information</h4>
      <br/>
      <div class="col-lg-10 col-md-10 col-sm-10">
      <div class="table-responsive col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8" >
            <table class="table table-bordered table-condensed table-highlight" >
                <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Relation</th>
                </thead>
                <tbody id="tdetails">
                    <tr>
                        <td><input type="text" class="form-control"/></td>
                        <td>
                            <select class="form-control">
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control" /></td>
                        <td><input type="text" class="form-control" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1">
          <button type="submit" class="btn btn-info btn-sm " id="adduser">ADD</button>
        </div>
      </div>
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
    </div>
    </form>
	</div>
@endsection
