<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Station;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
use Datatables;
use Auth;
use Intervention\Image\Facades\Image as Image;

class StationController extends Controller
{
    //

	public function create()
	{
		$station = new Station;
		$station->stationarea=Input::get('stationarea');
		$station->save();
		$station=Station::all();
		return view('station',compact('station'));

	}

	public function check()
 {
 	//$station = new Station;
 	$station=Station::all();
 	return view('register',compact('station'));
 }


 public function display()
{
	$station = new Station;
	$station=Station::all();
	return view('station',compact('station'));
}

public function getDelete($stationId)
    {
        $station = Station::find($stationId);

            $station->delete();

              $station=Station::all();
		return view('station',compact('station'));
	}
}
