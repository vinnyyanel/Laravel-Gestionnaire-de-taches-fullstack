<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index( ){
        return view('auth.auth');
    }

    public function store(AuthRequest $request ){

        try {
            $credentials = $request->only('email','password');
            Auth::attempt($credentials);
            $request->session()->regenerate();
             return redirect()->route('dashboard',['id'=>Auth::user()->id]);
        } catch (\Throwable $th) {
            return redirect()->route('auth.index')->with('error','information de connexion incorrecte');
        }
    }

    public function destroy(){
        Auth::logout();
        return redirect()->route('auth.index');
    }
}
