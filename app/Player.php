<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{


    public function battle()
    {
        return $this->hasMany(Battle::class);
    }

    public function score()
    {
        return $this->hasManyThrough('App\Score', 'App\Battle');
    }
}
