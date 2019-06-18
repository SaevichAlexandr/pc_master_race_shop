<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class CatalogController extends Controller
{
    public function showCatalog()
    {
        $games = Game::orderBy('name')->limit($_GET['number'])->get();

        return $games;
    }
}
