<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'nickname' ,'email', 'password', 'registered_ip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'registered_ip'
    ];

    public function battle()
    {
        return $this->belongsToMany(Battle::class, 'battle_player');
    }

    public function score()
    {
        return $this->hasMany(Score::class);
    }

    public function scopeGetUserPoints($query, $game = '', $nickname = '')
    {
        return DB::table('users')
            ->select('users.nickname', 'users.id', 'users.first_name', 'users.last_name',  DB::raw('SUM(score) as total_score'))
            ->leftJoin('scores', 'scores.user_id', '=', 'users.id')
            ->leftJoin('battles', 'scores.battle_id', '=', 'battles.id')
            ->when($game, function ($query, $game) {
                return $query->where('battles.game_id', $game);
            })
            ->when($nickname, function($query, $nickname) {
                return $query->where('nickname', 'like', '%' . $nickname . '%');
            })
            ->groupBy('users.id')
            ->get();
    }
}
