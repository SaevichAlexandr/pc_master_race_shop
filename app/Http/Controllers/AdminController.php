<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsersTable()
    {
        return view('users_table')->with('users', $users = User::all());
    }

    public function createRow()
    {
        if ($_POST['table_name'] == 'users') {
            if($_POST['is_admin'] == 0) {
                $newUserId = User::create(
                    [
                        'email' => $_POST['email'],
                        'password' => bcrypt($_POST['password']),
                        'is_admin' => false
                    ]
                );
            } elseif($_POST['is_admin'] == 1) {
                $newUserId = User::create(
                    [
                        'email' => $_POST['email'],
                        'password' => bcrypt($_POST['password']),
                        'is_admin' => true
                    ]
                );
            }
            echo json_encode($newUserId);
        }
    }

    public function deleteRow()
    {
        if($_POST['table_name'] == 'users') {
            $deletedUser = User::where('id', '=', $_POST['id'])->delete();

            echo $deletedUser;
        }
    }
}
