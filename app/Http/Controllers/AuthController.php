<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return view('admin.home');
        }
        return redirect()->route('admin.login');

    }

    public function loginform()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        var_dump($request->all());

        $credentials = [
            'email' => $request->email,
            'password' => $request->password

        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('admin.home');
        }
        return redirect()->back()->withInput()->withErrors(['Verifique suas credenciais']);


    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
