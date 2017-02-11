<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Password extends Eloquent {

    protected $table = 'password_resets';

    public $timestamps = false;
}