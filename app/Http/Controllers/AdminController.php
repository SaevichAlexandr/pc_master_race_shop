<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showUsersTable()
    {
        return view('users_table')->with('users', $users = User::all());
    }

    public function showOrdersTable()
    {
        return view('orders_table')->with('orders', $orders = Order::all());
    }

    public function showGamesTable()
    {
        return view('games_table')->with('games', $games = Game::all());
    }

    //TODO: сделать валидацию вводимых данных для всех методов
    public function createRow()
    {
        if ($_POST['table_name'] == 'users') {
            if (!User::where('email', '=', $_POST['email'])->first()) {
                if($_POST['is_admin'] == 0) {
                    $newUser = User::create(
                        [
                            'email' => $_POST['email'],
                            'password' => Hash::make($_POST['password']),
                            'is_admin' => false
                        ]
                    );
                    $newUser->password = encrypt($newUser->password);
                } elseif($_POST['is_admin'] == 1) {
                    $newUser = User::create(
                        [
                            'email' => $_POST['email'],
                            'password' => Hash::make($_POST['password']),
                            'is_admin' => true
                        ]
                    );
                }
                echo json_encode($newUser);
            } else {
                echo 0;
            }
        } elseif ($_POST['table_name'] == 'orders') {
            $newOrder = Order::create(
                [
                    'user_id' => $_POST['user_id'],
                    'game_id' => $_POST['game_id'],
                    'email_to_send' => $_POST['email_to_send']
                ]
            );
            echo json_encode($newOrder);
        }
    }

    // сделать валидацию вводимых данных
    public function updateRow()
    {
        if ($_POST['table_name'] == 'users') {
            $user =  User::where('id', '=', $_POST['id'])->first();
            $user->email = $_POST['email'];
            $user->is_admin = $_POST['is_admin'];
            $user->save();
            echo json_encode($user);
        } elseif ($_POST['table_name'] == 'orders') {
            $order = Order::where('id', '=', $_POST['id'])->first();
            $order->user_id = $_POST['user_id'];
            $order->game_id = $_POST['game_id'];
            $order->email_to_send = $_POST['email_to_send'];
            $order->save();
            echo json_encode($order);
        }

    }

    public function deleteRow()
    {
        if ($_POST['table_name'] == 'users') {
            $id = $_POST['id'];
            $row = User::where('id', '=', $id)->first();
            $isAdmin = $row->is_admin;
            if($_POST['table_name'] == 'users' && $isAdmin != 1) {
                $deletedUser = User::where('id', '=', $id)->delete();
                echo $deletedUser;
            } else {
                echo 0;
            }
        } elseif ($_POST['table_name'] == 'orders') {
            $id = $_POST['id'];
            $deletedOrder = Order::where('id', '=', $id)->delete();
            echo $deletedOrder;
        } elseif ($_POST['table_name'] == 'games') {
            $id = $_POST['id'];
            $deletedGame = Game::where('id', '=', $id)->delete();
            echo $deletedGame;
        }

    }
}
