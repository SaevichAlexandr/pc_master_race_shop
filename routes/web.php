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

Route::get('/bestsellers', 'BestsellersController@showBestsellers');

Route::get('/new_games', 'NewGamesController@showNewGames');

Route::get('/preorders', 'PreordersController@showPreorders');

Route::get('/show_catalog', 'CatalogController@showCatalog');

Route::get('/registration-custom', 'AuthController@showRegisterForm')->name('custom.register');
Route::post('/registration-custom', 'AuthController@register');

Route::get('/login-custom', 'AuthController@showLoginForm')->name('custom.login');
Route::post('/login-custom', 'AuthController@login');

Route::get('/user_orders', 'UserOrdersController@showUsersOrders');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/sendGameId', 'BuyingController@sendGameId')->name('send_game_id');

Route::post('/buying', 'BuyingController@buying')->name('buying');

Route::get('/buy_success', function () {
    return view('buy_success');
});


Route::middleware(['is_admin'])->group(function () {

    Route::get('/admin_page', function() {
        return view('admin_page');
    });


});
