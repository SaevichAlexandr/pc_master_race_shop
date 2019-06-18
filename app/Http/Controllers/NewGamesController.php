<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class NewGamesController extends Controller
{
    /**
     * Метод создаёт страницу с недавно добавлеными играми
     *
     * @return mixed
     */
    public function showNewGames()
    {
        // новыми будем считать игры добавленные не ранее месяца назад от текущего дня
        $date = date('Y-m-d');

        $explodeDate = explode('-', $date);

        if ($explodeDate[1] > 10) {
            $startDate = "$explodeDate[0]-".($explodeDate[1]-1)."-$explodeDate[2]";
        } elseif ($explodeDate[1] <= 10) {
            $startDate = "$explodeDate[0]-0".($explodeDate[1]-1)."-$explodeDate[2]";
        }

        $newGames = Game::where('created_at', '>', $startDate)->get();

        return view('new_games')->with('new_games', $newGames);
    }
}
