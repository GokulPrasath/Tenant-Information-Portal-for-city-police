<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Admin;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
class AdminController extends Controller
{
    //
    public function show(){
    //  $police = new Police;
    //  $ad->badgeid=Input::get('bgid');
      //$ad1->password=Input::get('passwd');
      $ad=Admin::select('badgeid','password')
                ->where('badgeid','=',12345)
      //$admins=Admin::find($ad,$ad1);
		return view('dashboard');
    }
}
