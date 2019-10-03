<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Game;
use Illuminate\Support\Facades\Auth;

class UserOrdersController extends Controller
{
    //TODO: было бы неплохо не дублировать карточки игр, а показывать отдельным пунктом, сколько ключей конкретной игры
    // было приобретено пользователем
    public function showUsersOrders()
    {
        $userId = Auth::user()->id;

        $orders = Order::where('user_id', '=', $userId)->get();

        $games = [];

        $i = 0;
        foreach ($orders as $order) {
            $games[$i] = Game::where('id', '=', $order->game_id)->first();
            $i++;
        }

        return view('user_orders')->with('games', $games);
    }
}
