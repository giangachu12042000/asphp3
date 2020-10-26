<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserRequest;

class LoginController extends Controller
{
    public function index()
    {
        // Lay thong tin user dang dang nhap
        // dd(Auth::user());
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    // Ham xu ly viec login
    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            User::where('email','like',$request->email)->update(['is_active'=>1]);
            return redirect()->route('dashboard');
        }

        return redirect()->route('auth.get-login');
        // redirect()->back();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function signUp(){
        dd(1);
    }

    public function logout()
    {
        $users = Auth::user();
        // dd($users);
        if($users == null || $users->email == ''){
            return redirect()->route('auth.get-login');
        }
        User::where('email','like',$users->email)->update(['is_active'=> 0]);
        Auth::logout();
        return redirect()->route('auth.get-login');
    }
}
