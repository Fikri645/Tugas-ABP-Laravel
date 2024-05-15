<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function view_data()
    {
        $judul = 'Data Prodi';
        $arr = ['IF', 'IT', 'SE', 'DS'];
        return view('view_data', [
            'title' => $judul,
            'data' => $arr,
        ]);
    }

    public function autentikasi(Request $request)
    {
        if (Auth::attempt(['email' => $request->usr, 'password' => $request->pwd])) {
            $request->session()->regenerate();
            return redirect('/product');
        }
        return redirect('/login')->with('error', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); 
    }
}
