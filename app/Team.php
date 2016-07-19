<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $guarded = [];

    public function tasks()
    {
    	return $this->hasMany('App\Task');
    }
}
