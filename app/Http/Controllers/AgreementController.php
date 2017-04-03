<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Agreement;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;
use Datatables;
use Auth;
use Intervention\Image\Facades\Image as Image;
use App\DataTables\UsersDataTable;

class AgreementController extends Controller
{
    //
    public function create()
   {
    $owner = new Agreement;
	  $owner->oname=Input::get('oname');
    $owner->oaddress=Input::get('oaddress');
    $owner->omobno=Input::get('omobno');
    $owner->oemail=Input::get('oemail');
    $owner->oauthority=Input::get('oauthority');
    $owner->oidproof=Input::get('oidentity');
    $owner->oagreementno=Input::get('orentno');
    $owner->oagreementdocs=Input::get('opropdoc');
    $owner->ostationarea=Input::get('oarea');
    $owner->tname=Input::get('tname');
    $owner->taddress=Input::get('taddress');
    $owner->tmobno=Input::get('tmobno');
    $owner->temail=Input::get('temail');
    $owner->tpic=Input::get('tpic');
    $owner->tidproof=Input::get('tidentity');
    $owner->save();
    $owner = Agreement::where('oemail','=',Input::get('oemail'))->first();
    Session::put('oid',$owner->oagreementno);
		$owner=Agreement::all();
    //Session::put('key','value');
    return Redirect::to('family');
  }

  public function show()
 {
   $agreement = new Agreement;
   $agreement=Agreement::all();
   return view('report',compact('agreement'));
 }


public function datatable()

{
 return view('report');
}
public function getPosts()

{

$agreements = DB::table('agreements')->select('*');

 return Datatables::of($agreements)

     ->make(true);

}

public function policedatatable()

{
 return view('polreport');
}
public function policegetPosts()

{
$user=Auth::user()->stationarea;
$agreements = DB::table('agreements')->select('*')->where('ostationarea','=',$user);

 return Datatables::of($agreements)

     ->make(true);

}
public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');
    }

}
