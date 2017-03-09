@extends('layouts.dashlayout')
<div class="container col-lg-offset-2">
    <div class="row">
        <div class="col-md-10 ">
          <br/>
          <br/>
          <br/>
          <br/>
            <h2 style="color:blue">Police Details</h2>
       <div class="table-responsive col-lg-12 col-md-12 col-sm-12" >
				<table class="table table-bordered table-hover table-highlight">
					<thead  class="tablecss" style="color:white">
						<th>Name</th>
						<th>Badgeid</th>
						<th>StationArea</th>
						<th>StationName</th>
            <th>Email</th>
					</thead>
					@foreach($user as $polices)
						<tr>
							<td>{{$polices->name}}</td>
							<td>{{$polices->badgeid}}</td>
							<td>{{$polices->stationarea}}</td>
							<td>{{$polices->stationname}}</td>
              <td>{{$polices->email}}</td>
						</tr>
					@endforeach
				</table>
   </div>
				</div>
            </div>
        </div>
@section('content')
@endsection
