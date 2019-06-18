<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class BestsellersController extends Controller
{
    public function showBestsellers()
    {
        $bestsellers = Game::orderBy('sold_keys', 'desc')->limit(9)->get();

        return view('bestsellers')->with('bestsellers', $bestsellers);
    }
}
