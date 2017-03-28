<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //
	protected $table='stations';

	public static function scount() {
    return DB::table('stations')->count();
    }
		public static function station()
		{
			$station=Station::all();
			return $station;
		}
}
