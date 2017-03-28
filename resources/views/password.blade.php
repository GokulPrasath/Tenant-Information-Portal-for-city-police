@extends('layouts.authenticate')

@section('content')
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid col-lg-offset-3 col-lg-8">
 <div class="panel panel-primary">
  <div class="panel panel-header">
    <h3>Password</h3>
          </div>
  <div class="panel panel-body ">
<form class="form-horizontal " role="form" method="POST" action="{{ url('password') }}">
    {{ csrf_field() }}

<div class="col-lg-8 col-md-8 col-sm-8 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  <label class="control-label col-lg-4 col-md-4 col-sm-4" for="password"><h4>Change Password</h4></label>
  <div class="col-lg-8 col-md-8 col-sm-8 ">
    <input id="password" type="password" class="form-control" name="password" required>

    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 form-group">
  <label class="control-label col-lg-4 col-md-4 col-sm-4" for="password-confirm"><h4>Confirm Password</h4></label>
  <div class="col-lg-8 col-md-8 col-sm-8 ">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
  </div>
</div>
<br/>
<br/>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary" >
            Change
        </button>
        <a href="/agreement" class=" btn btn-md btn-primary">Back</a>
    </div>
</div>
</form>
</div>
</div>
</div>
@endsection
