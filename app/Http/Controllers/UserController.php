<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
use Datatables;
use Auth;
use Intervention\Image\Facades\Image as Image;
use App\DataTables\UsersDataTable;
class UserController extends Controller
{
    //
    public function show()
   {
  	 $user = new User;
  	 $user=User::all();
  	 return view('adminreport',compact('user'));
   }


   public function datatable()

{

    return view('adminreport');

}
public function getPosts()

{

  $users = DB::table('users')->select('*');

    return Datatables::of($users)

        ->make(true);

}



public function profile(){
		return view('profile',array('user'=>Auth::user()) );
	}
	public function update_avatar(Request $request){
	  if($request->hasFile('avatar')){
	  $avatar =$request->file('avatar');
	  $filename= time().'.'.$avatar->getClientOriginalExtension();
	  Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
	  $user=Auth::user();
	  $user->avatar=$filename;
	  $user->save();
	  }
	  return view('profile',array('user'=>Auth::user()) );
	}




  public function googleLineChart()

  {

      $visitor = DB::table('agreements')

                  ->select(

                      DB::raw("date(created_at) as year"),

                      DB::raw("count(*) as total_click"))

                  ->orderBy("created_at")

                  ->groupBy(DB::raw("date(created_at)"))

                  ->get();


      $result[] = ['Year','Registered Counts'];

      foreach ($visitor as $key => $value) {

          $result[++$key] = [$value->year, (int)$value->total_click];

      }


      return view('dashboard')

              ->with('visitor',json_encode($result));

  }

  public function password(){

     $user=Auth::user();
    $password=Input::get('password');
    $user->password= bcrypt($password);
    $user->save();
    return view('password',array('user'=>Auth::user()) );
  }


}
