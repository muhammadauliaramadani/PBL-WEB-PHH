<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function TampilRegister()
    {
        return view('register');
    }
    
    public function SubmitRegister(Request $request)
    {
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = bcrypt($request->password);
        $register->save();
        return redirect()->route('login');
        // return redirect()->route('login');
    }

    public function TampilLogin()
    {
        return view('login');
    }

    public function SubmitLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('login')->with('error', 'Login gagal. email atau password salah!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
