<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function loginpage(Request $request)
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/indexsekolah');
        } else {
            echo "login tidak berhasil";
        }
    }

    public function registerpage(Request $request)
    {
        return view('register');
    }

    public function registered(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'email'             => 'required',
            'password'          => 'required'
        ]);
        $dataStore = [
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password)

        ];
        User::create($dataStore);
        return redirect('/loginpage');
    }

    //homepage
    public function homepage(Request $request)
    {
        return view('home');
    }

    //logout
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}