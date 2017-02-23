<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Police;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
class PoliceController extends Controller
{
	 public function create()
	{
		$police = new Police;
		$police->name=Input::get('name');
		$police->badgeid=Input::get('badgeid');
		$police->stationarea=Input::get('stationarea');
		$police->password=Input::get('password');
		$police->save();
		$police=Police::all();
		return view('policereg',compact('police'));
	}
	//
}
