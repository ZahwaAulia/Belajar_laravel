<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class AuthController extends Controller
{


    public function index()
    {
        return view('login-form');
    }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => [
                'required',
                'min:7',
                'regex:/[A-Z]/'
            ]
        ], [
            'username.required' => 'Username wajib diisi!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 7 karakter!',
            'password.regex' => 'Password harus mengandung huruf kapital!'
        ]);


        $username = $request->input('username');
        $password = $request->input('password');


        if ($username === 'admin' && $password === 'Adminla123') {
            return redirect('/dashboard')->with('success', 'Login berhasil, selamat datang ' . $username . '!');
        }


        return redirect('/auth')->with('error', 'Username atau password salah,silahkan coba lagi!');
    }
}
