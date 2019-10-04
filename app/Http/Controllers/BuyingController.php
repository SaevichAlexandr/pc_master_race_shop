<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class BuyingController extends Controller
{
    public function sendGameId()
    {
        return view('buy_form_email')->with('game_id', $_POST['game_id'] );
    }

    public function buying()
    {
        // в POST передаётся мыло и id игры

        $newOrder = new Order();
        $updateGame = new Game();

        if(Auth::check()) {

            $newOrder->user_id = Auth::user()->id;
            $newOrder->game_id = $_POST['game_id'];
            $newOrder->email_to_send = $_POST['email'];
            $newOrder->save();

            $game = $updateGame->where('id', '=', $_POST['game_id'])->first();
            $sold_games = ++$game->sold_keys;
            $updateGame->where('id', '=', $_POST['game_id'])->update(['sold_keys' => $sold_games]);
        } else {
            // метод для сохранения через ОРМ
            $newOrder->game_id = $_POST['game_id'];
            $newOrder->email_to_send = $_POST['email'];
            $newOrder->save();

            $game = $updateGame->where('id', '=', $_POST['game_id'])->first();
            $sold_games = ++$game->sold_keys;
            $updateGame->where('id', '=', $_POST['game_id'])->update(['sold_keys' => $sold_games]);
        }
        return redirect('/buy_success');
    }
}
