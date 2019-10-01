<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showUsersTable()
    {
        return view('users_table')->with('users', $users = User::all());
    }

    //TODO: сделать валидацию вводимых данных для всех методов
    public function createRow()
    {
        if ($_POST['table_name'] == 'users' && !User::where('email', '=', $_POST['email'])->first()) {
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
                $newUser->password = encrypt($newUser->password);
            }
            echo json_encode($newUser);
        } else {
            echo 0;
        }
    }

    // сделать валидацию вводимых данных
    public function updateRow()
    {
        $user =  User::where('id', '=', $_POST['id'])->first();
        $user->email = $_POST['email'];
//        $user->password = Hash::make($_POST['password']);
        $user->is_admin = $_POST['is_admin'];
        $user->save();
        echo json_encode($user);
    }

    public function deleteRow()
    {
        $id = $_POST['id'];
        $row = User::where('id', '=', $id)->first();
        $isAdmin = $row->is_admin;
        if($_POST['table_name'] == 'users' && $isAdmin != 1) {
            $deletedUser = User::where('id', '=', $id)->delete();
            echo $deletedUser;
        } else {
            echo 0;
        }
    }
}
