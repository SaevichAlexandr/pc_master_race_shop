<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class PreordersController extends Controller
{
    /**
     * Метод создаёт страницу с предзаказами
     *
     * @return mixed
     */
    public function showPreorders()
    {
        $preorders = Game::where('is_preorder', 1)->get();

        return view('preorders')->with('preorders', $preorders);
    }
}
