<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{






    function Register(Request $request): RedirectResponse
    {

        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        $input['password'] = Hash::make($input['password']);
        User::create($input);
        return redirect()->route('login')->with('success', 'Đăng ký thành công. Vui lòng đăng nhập.');
    }
    function Login(Request $request)
    {
        $login = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        if (Auth::attempt($login)) {
            $user = Auth::user();
            Session::put('user', $user);
            echo "<script> alert('Thanh cong'); window.location.assign('/');</script>";
        } else {
            echo "<script> alert('That bai '); window.location.assign('/login');</script>";
        }
    }
}
