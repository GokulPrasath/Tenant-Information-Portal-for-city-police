@extends('layouts.authenticate')

@section('content')
<div id="page-wrapper">
  <br/>
  <br/>
  <br/>
  <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-lg-10 col-md-10 " method="post" action="{{ url('/agreement') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
       <label class="control-label col-lg-4 col-md-4 col-sm-4" for="area">Police Station Area</label>
       <div class="col-lg-8 col-md-8 col-sm-8 ">
       <select type="text" class="form-control" name="area" id="area" placeholder="Enter Police Station Area"  required="required">
         <option>Podanur</option>
         <option>Ukkadam</option>
         <option>Coimbatore</option>
         <option>Saravanampatti</option>
       </select>

           <!--<input type="text" class="form-control" name="stationarea" id="area" placeholder="Enter Police Station Area"  required="required">-->
       </div>
     </div>
     <br/>
     <br/>
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
    <h3 style="color:blue">Tenant Family Information</h3>
     <br/>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="tenantpic">FatherName</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <input type="text" class="form-control" name="tfathername" id="tfathername">
      </div>
    </div>
     <div class="col-lg-5 col-md-6 col-sm-6 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4" for="tenantpic">MotherName</label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="tmothername" id="tmothername">
        </div>
      </div>
      <br/>
      <br/>
      <br/>
       <div class="col-lg-5 col-md-6 col-sm-6 ">
          <label class="control-label col-lg-4 col-md-4 col-sm-4" for="tenantpic">SpouseName</label>
          <div class="col-lg-8 col-md-8 col-sm-8 ">
            <input type="text" class="form-control" name="tspousename" id="tspousename">
          </div>
        </div>
         <div class="col-lg-5 col-md-6 col-sm-6 ">
            <label class="control-label col-lg-4 col-md-4 col-sm-4" for="tenantpic">ChildrenNames</label>
            <div class="col-lg-8 col-md-8 col-sm-8 ">
              <input type="text" class="form-control" name="tchildname" id="tchildname">
            </div>
          </div>
  </div>
  </div>
  <br/>
  <br/>
  <div class="col-sm-10 col-md-10 col-lg-10">
  </div>
  <div class="col-sm-1 col-md-1 col-lg-1">
    <button type="submit" class="btn btn-info btn-lg" >Submit</button>
  </div>
  <br/>
  <br/>
  <br/>
  </div>
    <br/>
    <br/>
    <br/>
    </form>
	</div>
@endsection
