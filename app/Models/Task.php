<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable =  ['user_id', 'name', 'description', 'completed'];

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

}
