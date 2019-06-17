<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class BestsellersController extends Controller
{
    public function showBestsellers()
    {
        $bestsellers = Game::orderBy('sold_keys', 'desc')->skip(0)->limit(15)->get();

        return view('bestsellers')->with('bestsellers', $bestsellers);
    }
}
