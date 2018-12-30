<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Resources\UsersPoints;
use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UsersPoints(User::getUserPoints());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function searchPlayersByName(Request $request)
    {
        if ($request->ajax()) {
//          Game and nickname isset
            if ($request->input('nickname') && $request->input('game')) {
//              Game is not set to All games but Nickname is filled
                if ($request->input('game') != 'all-games'){
                    return new UsersPoints(User::getUserPoints($request->input('game'), $request->input('nickname')));
//                    return new UsersPoints);
                }
//              Game isset to all games
                else{
                    return new UsersPoints(User::getUserPoints('', $request->input('nickname')));
                }
            }
//          Game is all, nickname isset
            else if ($request->input('nickname')){
                return new UsersPoints(User::getUserPoints('' ,$request->input('nickname')));
            }
//          Only game isset
            else if ($request->input('game')){
//              Game isset not set to All games
                if ($request->input('game') != 'all-games'){
                    return new UsersPoints(User::getUserPoints($request->input('game')));
//                    return new UsersPoints);
                }
//              Game isset to all games
                else{
                    return new UsersPoints(User::getUserPoints());
                }
            }
//          Everything is empty, show all games all players
            else{
                return new UsersPoints(User::getUserPoints());
            }
        }


//        return User::getUserPoints($game);
    }
}
