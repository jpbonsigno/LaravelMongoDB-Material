<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
	protected $collection = 'roles';
    protected static $unguarded = true;

    protected $fillable = ['name'];
}