<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RoleUser extends Eloquent
{
    protected $collection = 'role_users';
    protected static $unguarded = true;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
