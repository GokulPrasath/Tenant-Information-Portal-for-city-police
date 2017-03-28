<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Log;
use App\Admin;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
class AdminController extends Controller
{

  public function profile(){
  		return view('aprofile',array('user'=>Auth::guard('admins')->user()) );
  	}
  	public function update_avatar(Request $request){
  	  if($request->hasFile('avatar')){
  	  $avatar =$request->file('avatar');
  	  $filename= time().'.'.$avatar->getClientOriginalExtension();
  	  Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
  	  $user=Auth::guard('admins')->user();
  	  $user->avatar=$filename;
  	  $user->save();
  	  }
  	  return view('aprofile',array('user'=>Auth::guard('admins')->user()) );
  	}

    public function password(){

       $user=Auth::guard('admins')->user();
      $password=Input::get('password');
      $user->password= bcrypt($password);
      $user->save();
      return view('adminpassword',array('user'=>Auth::guard('admins')->user()) );
    }
}
