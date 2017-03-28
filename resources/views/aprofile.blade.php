@extends('layouts.dashlayout')

@section('content')

<div class="container col-lg-offset-1 col-lg-10">
  <br/>
  <br/>
        <div class="col-lg-12">

		<img src="/uploads/avatars/{{ Auth::guard('admins')->user()->avatar }}" style="width:160px; height:150; float:left; border-radius:50%; margin-right:25px;">
           <h1 style="color:white">{{ Auth::guard('admins')->user()->name }}'s profile</h1>
		   <form enctype="multipart/form-data" action="/aprofile" method="POST">
		   <lable>Change the profile picture</lable>
		   <input type="file" name="avatar">
		   <input type="hidden" name="_token" value="{{csrf_token()}}">
       <a href="/dashboard" class="pull-right btn btn-sm btn-primary">Back</a>
		   <input type="submit" value="Update" class="pull-right btn btn-sm btn-primary">
		   </form>

        </div>

  <div class="panel panel-primary">
        <div class="panel panel-header">
      <h3>Profile Picture</h3>
       </div>
        <div class="panel panel-body">
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4"><h3>Admin Name</h3></label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <label class="control-label col-lg-4 col-md-4 col-sm-4"><h3>{{ Auth::guard('admins')->user()->name }}</h3></label>
        </div>
      </div>
      <br/>
      <br/>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
        <label class="control-label col-lg-4 col-md-4 col-sm-4"><h3>Badge Id</h3></label>
        <div class="col-lg-8 col-md-8 col-sm-8 ">
          <label class="control-label col-lg-4 col-md-4 col-sm-4"><h3>{{ Auth::guard('admins')->user()->badgeid }}</h3></label>
        </div>
      </div>
      <br/>
      <br/>
       </div>
     </div>
</div>
@endsection
