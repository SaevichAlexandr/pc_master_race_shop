<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/add_game', 'MainPageController@addGame');

Route::get('/', 'MainPageController@takeGames');

Route::get('gameinfo/{id}', function ($id) {

    $gameInfo = App\Game::where('id', '=', $id)->first();

    return view('gameinfo')->with('gameInfo', $gameInfo);
});

Route::get('/contacts', function() {
    return view('contacts');
});

Route::get('/purchasing', function() {
    return view('purchasing');
});

Route::get('/warranty', function() {
    return view('warranty');
});

Route::get('/bestsellers', function() {
    //TODO:Времнная заглушка для страницы с бестселлерами
    return view('bestsellers');
});

Route::get('/catalog', function() {
    //TODO:Времнная заглушка для каталога
    return view('catalog');
});

Route::get('/new_games', function() {
    //TODO:Времнная заглушка для страницы со свежим мясом
    return view('new_games');
});

Route::get('/preorders', function() {
    //TODO:Времнная заглушка для предзаказов
    return view('preorders');
});

Route::get('/registration', function() {
    //TODO:Времнная заглушка для формы регистрации
    return view('registration');
});

Route::get('/user', function() {
    //TODO:Времнная заглушка для каталога
    return view('catalog');
});
