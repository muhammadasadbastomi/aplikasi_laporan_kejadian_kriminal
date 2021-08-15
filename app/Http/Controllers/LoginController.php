<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'username' => ['required'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     switch (Auth::user()->role) {
        //         case 1:
        //             return redirect()->route('userAdmin.beranda');
        //             break;
        //         case 0:
        //             return redirect()->route('userPenyuluh.beranda');
        //             break;
        //     }

        // }

        // return back()->withErrors([
        //     'username' => 'Username atau password salah',
        // ]);

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('admin.index')->withSuccess('Berhasil login');

        } else { // false

            //Login Fail

            return redirect()->route('login')->withErrors('Username atau password salah');
        }

    }

    public function logout(Request $req)
    {
        Auth::logout();
        return redirect()->route('login')->withSuccess('Anda berhasil logout');
    }
}
