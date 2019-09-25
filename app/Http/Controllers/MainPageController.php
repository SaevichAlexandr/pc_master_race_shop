<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class MainPageController extends Controller
{
    public function takeGames()
    {
        $games = Game::skip(0)->limit(12)->get();

        return view('main')->with('games', $games);

    }

    public function gameInfo($id)
    {
        $gameInfo = Game::where('id', '=', $id)->first();

        view('gameinfo')->with('gameInfo', $gameInfo);
        return $gameInfo->description_ru;
    }

    public function test()
    {
        $games = Game::all();
        return $games;
    }

}
