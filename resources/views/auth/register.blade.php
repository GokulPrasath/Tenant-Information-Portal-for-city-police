@extends('layouts.dashlayout')

@section('content')
<div id="page-wrapper">
      <div class="container-fluid col-lg-offset-1 col-lg-9">
       <div class="panel panel-primary">
        <div class="panel panel-header">
          <h3>Police Registration</h3>
                </div>
        <div class="panel panel-body ">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
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
                        <div class="form-group{{ $errors->has('stationame') ? ' has-error' : '' }}">
                            <label for="stationame" class="col-md-4 control-label">Police Station Name</label>

                            <div class="col-md-6">
                                <input id="stationame" type="text" class="form-control" name="stationame" value="{{ old('stationame') }}" required autofocus>

                                @if ($errors->has('stationame'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stationame') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('stationarea') ? ' has-error' : '' }}">
                            <label for="stationarea" class="col-md-4 control-label">Police Station Area</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control" name="stationarea" id="area" placeholder="Enter Police Station Area" value="{{ old('stationarea') }}" required autofocus>
                                  @foreach(App\Station::station() as $stations)
                                  <option>{{ $stations->stationarea }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('stationarea'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stationarea') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Police Image</label>

                            <div class="col-md-6">
                                <input id="area" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}" required autofocus>

                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" >
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
