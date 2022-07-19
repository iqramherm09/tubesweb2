<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('login');
    }

    public function auth(Request $req){



        if(Auth::attempt(['username' => $req->username, 'password' => $req->pass])){
            $req->session()->regenerate();
            return redirect()->intended('/');
        }

        return back();

    }
    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



}
