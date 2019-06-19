<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Game;
use Illuminate\Support\Facades\Auth;

class UserOrdersController extends Controller
{
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
