@extends('layouts.mainlayout')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="#">
                       {{ csrf_field() }}
   <div class="container-fluid col-lg-offset-2 col-lg-8">
     <div class="panel panel-primary">
     <div class="panel panel-header">
   <h3>Admin Login</h3>
    </div>
     <div class="panel panel-body ">
   <br/>
<div class="form-group{{ $errors->has('badgeid') ? ' has-error' : '' }}">
                                       <label for="badgeid" class="col-md-4 control-label">Badgeid</label>

                                       <div class="col-md-6">
                                           <input id="badgeid" type="number" class="form-control" name="badgeid" value="{{ old('badgeid') }}" required autofocus>

                                           @if ($errors->has('badgeid'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('badgeid') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>

                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <label for="password" class="col-md-4 control-label">Password</label>

                           <div class="col-md-6">
                               <input id="password" type="password" class="form-control" name="password" required>

                               @if ($errors->has('password'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group">
                           <div class="col-md-6 col-md-offset-4">
                               <div class="checkbox">
                                   <label>
                                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                   </label>
                               </div>
                           </div>
                       </div>

                       <div class="form-group">
                           <div class="col-md-8 col-md-offset-4">
                               <button type="submit" class="btn btn-primary">
                                   Login
                               </button>

                               <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Forgot Your Password?
                               </a>
                           </div>
                       </div>
    </div>
  </div>
 <br/>
 <br/>
<br/>
</div>
</form>
@endsection
