<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{


    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function score()
    {
        return $this->hasMany(Score::class);
    }
}
