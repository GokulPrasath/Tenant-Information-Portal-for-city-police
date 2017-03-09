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
    public function check(){
      $admin = new Admin;
      $admin=Admin::all();
      $badge=Input::get('bgid');
      $pass=Input::get('passwd');
foreach($admin as $admins){
if($badge==$admins->badgeid && $pass==$admins->password )
{
        return Redirect::to('dashboard');
}
}
  return Redirect::to('admin');
    }
}
