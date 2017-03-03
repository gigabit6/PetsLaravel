<?php

namespace App\Entities;

use Eloquent;

class Pet extends Eloquent {
    protected $table = 'user_pet';

    public function comments()
    {
        return $this->hasMany('App\Entities\Comment');
    }
}

