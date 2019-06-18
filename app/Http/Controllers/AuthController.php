<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $this->validation($request);
        // вот тут в нижней строчке могут возникнуть проблемы как мне кажется
        User::create($request->all());
        return redirect('/')->with('Status', 'You are registed');
    }

    public function showLoginForm()
    {
        return view('authorization');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255'
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password ])) {
            return redirect('/');
        }
        return 'Ooops, something goes wrong';
    }

    public function validation($request)
    {
        return $this->validate($request, [
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|max:255'
        ]);
    }
}
