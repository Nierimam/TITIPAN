<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {

        return view('/loginregister', [
            'title' => 'Login & Register',
        ]);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'password.required' => 'Please enter your password.',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // Kalau Otentikasi Sukses
            return redirect('/')->with('success', 'Berhasil Login');
        } else {
            // kalau otentikasi gagal
            // return "gagal";
            return redirect('sesi')->withErrors('Email atau Password yuang dimasukkan tidak valid');
        }
    }
}
