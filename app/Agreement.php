<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    //
    protected $table = 'agreements';
protected $fillable = [
      'oname', 'oaddress', 'omobno','oemail',
      'oauthority', 'oidproof', 'oagreementno','oagreementdocs',
      'ostationarea','tname', 'taddress', 'tmobno','temail',
          'tpic', 'tidproof',
  ];
  public static function tcount() {
  return  DB::table('agreements')->count();
  }
}
