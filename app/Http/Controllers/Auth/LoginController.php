<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // fffunctttion unttuk ke halaman loggin
    public function login()
    {
        return view('auth.login');
    }

    // autthentticatttion
    public function dologin(Request $r)
    {
        $r->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi!!!',
            'password.required' => 'Password Wajib Diisi!!!'
        ]);

        $inpologin = [
            'email' => $r->email,
            'password'=> $r->password
        ];

        if(Auth::attempt($inpologin)) {
            return redirect()->route('dash');
                //return 'success';
            }else{
                return redirect('login')->withErrors('Username dan Password salah');
            // return back()->with('error','');
                //return back()->with('gagal', $request->validate);
        }
    }

//logggggouttttt
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Logout Berhasil');;
    }
}
