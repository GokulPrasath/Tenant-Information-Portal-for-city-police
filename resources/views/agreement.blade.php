@extends('layouts.authenticate')

@section('content')
<div id="page-wrapper">
  <br/>
  <br/>
  <br/>
  <br/>
  <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-lg-10 col-md-10 " method="post" action="{{ url('/family') }}">
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
          <input type="text" class="form-control" name="oname" id="name" required autofocus>
      </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="mobno">Mobile No</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="number" class="form-control" name="omobno" id="mobno" required autofocus>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="address">Address</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <textarea class="form-control" rows="3" name="oaddress" id="address" required autofocus></textarea>
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
          <input type="file" class="form-control" name="oidentity" id="identity" required autofocus>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="authority">Authority Person</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <input type="text" class="form-control" name="oauthority" id="authority" required autofocus>
      </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="propdoc">Property documents</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <input type="file" class="form-control" name="opropdoc" id="propdoc" required autofocus>
      </div>
     </div>
     <br/>
     <br/>
     <br/>
     <div class="col-lg-5 col-md-6 col-sm-6 ">
       <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="rentno">Rental Agreement No</label>
       <div class="col-lg-8 col-md-8 col-sm-8 ">
           <input type="number" class="form-control" name="orentno" id="rentno" required autofocus>
       </div>
     </div>
     <div class="col-lg-5 col-md-6 col-sm-6 ">
       <label class="control-label col-lg-4 col-md-4 col-sm-4" for="area">Police Station Area</label>
       <div class="col-lg-8 col-md-8 col-sm-8 ">
       <select type="text" class="form-control" name="oarea" id="area" placeholder="Enter Police Station Area"  required autofocus>
         @foreach(App\Station::station() as $stations)
         <option>{{ $stations->stationarea }}</option>
         @endforeach

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
          <input type="text" class="form-control" name="tname" id="name" required autofocus>
    </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4 " for="mobno">Mobile No</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="number" class="form-control" name="tmobno" id="mobno" required autofocus>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="address">Address</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <textarea class="form-control" rows="3" name="taddress" id="address" required autofocus></textarea>
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
          <input type="file" class="form-control" name="tidentity" id="identity" required autofocus>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-5 col-md-6 col-sm-6 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="tpic">Tenant Photo</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <input type="file" class="form-control" name="tpic" id="tpic" required autofocus>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
  </div>
  </div>
  <br/>
  <br/>
  <div class="col-sm-10 col-md-10 col-lg-10">
  </div>
  <div class="col-sm-1 col-md-1 col-lg-1">
    <button type="submit" class="btn btn-info btn-lg" ><i class="fa fa-btn fa-sign-in"></i>Next</button>
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
