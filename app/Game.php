<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{


    public function battle()
    {
        return $this->hasMany(Battle::class);
    }
}
