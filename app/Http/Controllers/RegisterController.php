<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function signUp(LoginRequest $request)
    {
        $user = new User;
        if($request->role_id == ''){
            $user->role_id = 0;
        }else{
            $user->role_id = $request->role_id;
        }
        if($request->is_active ==''){
            $user->is_active = 0;
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->save();
        return redirect()->route('auth.get-login');  
    }
}
