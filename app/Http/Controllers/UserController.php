<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;


class UserController extends Controller
{
    //
    public function show()
   {
  	 $user = new User;
  	 $user=User::all();
  	 return view('adminreport',compact('user'));
   }
}
