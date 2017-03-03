<?php

namespace App\Entities;

use Eloquent;

class Pet extends Eloquent {
    protected $table = 'user_pet';

    public function pet()
    {
        //1 - parameter Entity
        //2 - forein key
        //3 - local key
        return $this->belongsTo('App\Entities\Pet');
    }
}

