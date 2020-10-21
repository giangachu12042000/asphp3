<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // Lay thong tin user dang dang nhap
        // dd(Auth::user());
        if (Auth::check()) {
            return redirect()->route('product.index');
        }
        return view('auth.login');
    }

    // Ham xu ly viec login
    public function postLogin(Request $request)
    {
        // use Auth;
        $data = $request->only('email', 'password');
        // Kiem tra login su dung Auth
        // dd($data );
        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('auth.get-login');
        // redirect()->back();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.get-login');
    }
}
