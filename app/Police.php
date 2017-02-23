<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    //
	protected $table = 'police';
	protected $fillable = [
        'name', 'badgeid', 'stationarea','password',
    ];
}
