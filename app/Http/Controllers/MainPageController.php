<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class MainPageController extends Controller
{
//    public function addGame()
//    {
//        $newGame = new Game();
//        $newGame->platform = "PC";
//        $newGame->price = 60;
//        $newGame->release_date = '2019-06-09';
//        $newGame->developer = "FromSoftware";
//        $newGame->publisher = 'Bandai Namco';
//        $newGame->name = 'Dark Souls 3';
//        $newGame->system_requirements = "<br>ОС:&nbsp;Windows 8.1, Windows 8, Windows 7 (SP1) (64-разрядная)<br>Процессор:&nbsp;Intel Core 2 Q6600 @ 2.40 ГГц / AMD Phenom 9850 @ 2.5 ГГц<br>Оперативная память:&nbsp;4 ГБ ОЗУ<br>Видеокарта:&nbsp;NVIDIA 9800 GT, 1 ГБ / AMD HD
//                        4870, 1 ГБ<br>Место на диске:&nbsp;72 ГБ<br><br><br>";
//        $newGame->description_en = '<br>Set in the&nbsp;Kingdom of Lothric,&nbsp;the player is tasked to survive an oncoming apocalypse brought about by the ongoing conflict between the age of fire and those branded
//                        with the Dark Sign as with previous iterations of the series. To survive this event the player character must face the&nbsp;Lords of Cinder, previous heroes who linked
//                        the fire, as the cycle of Light and Dark continues and no matter what you do, darkness will return and repeat itself forever.<br><br>';
//        $newGame->description_ru = 'Dark Souls 3, заключительная часть трилогии от студии FromSoftware Inc., погрузит вас в мрачный и безжалостный мир. Призер «Лучшая RPG» на GamesCom 2015 и одна из самых ожидаемых игр 2016 года наконец-то вышла на PC, PlayStation 4 и Xbox One! Dark Souls 3 дает игрокам огромную свободу для изучения мира,
//                        графику нового поколения, напряженные схватки, традиционную атмосферу безнадежности и страданий, невиданных ранее безжалостных боссов, новые опасности и приключения. Если вы не боитесь трудностей, то эта игра именно для вас!';
//        $newGame->sold_keys = 0;
//        $newGame->is_preorder = false;
//        $newGame->image_name = 'dark_souls_3';
//        $newGame->save();
//    }

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
