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

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
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
