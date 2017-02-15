@extends('layouts.mainlayout')

@section('content')
  <form id="cadmin" class="form-horizontal col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 "action="{{ url('/dashboard') }}">
    <div class="container-fluid">
      <div class="panel panel-primary">
      <div class="panel panel-header">
    <h3>Admin Login</h3>
     </div>
      <div class="panel panel-body ">
	  <br/>
    <div class="col-lg-10 col-md-10 col-sm-10">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Badge Id</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="oname" id="name" placeholder="Enter Badge Id" required="required">
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-lg-10 col-md-10 col-sm-10 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="passwd">Password</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Enter Password" required="required">
      </div>
    </div>
    <br/>
    <br/>
    <br/>
		<div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
    <div class="col-sm-2 col-md-2 col-lg-2 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-1  btn-lg-2">
    <button type="submit" class="btn btn-info btn-md">Login</button>
    </div>
     </div>
   </div>
  <br/>
  <br/>
<br/>
</div>
</form>
<script>
$("cadmin").validate();
</script>
@endsection
