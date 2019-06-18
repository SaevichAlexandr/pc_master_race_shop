<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class CatalogController extends Controller
{
    public function showCatalog()
    {
        if ($_GET['sort_by'] == 'none') {

            $games = Game::limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'popularity_down') {

            $games = Game::orderBy('sold_keys')->limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'popularity_up') {

            $games = Game::orderBy('sold_keys', 'desc')->limit($_GET['number'])->get();

            return $games;

        }  elseif ($_GET['sort_by'] == 'date_down') {

            $games = Game::orderBy('created_at')->limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'date_up') {

            $games = Game::orderBy('created_at', 'desc')->limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'alphabet_down') {

            $games = Game::orderBy('name')->limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'alphabet_up') {

            $games = Game::orderBy('name', 'desc')->limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'price_down') {

            $games = Game::orderBy('price')->limit($_GET['number'])->get();

            return $games;

        } elseif ($_GET['sort_by'] == 'price_up') {

            $games = Game::orderBy('price', 'desc')->limit($_GET['number'])->get();

            return $games;

        }
    }
}
