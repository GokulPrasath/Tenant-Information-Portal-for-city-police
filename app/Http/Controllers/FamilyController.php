<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Family;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;

class FamilyController extends Controller
{

    public function create()
   {
     if(Session::has('oid'))
          $oid=Session::get('oid');
              $data = Input::get();
              foreach($data['ten'] as $key =>$val)
              {
                  $family = new Family;
                  $family->agreementno=$oid;
                  $family->name = $val['name'];
                  $family->gender = $val['gender'];
                  $family->age = $val['age'];
                  $family->relation = $val['relation'];

                  $family->save();
              }
         $family=Family::all();
         return Redirect::to('agreement');
  }
}
