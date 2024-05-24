<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(string $id){
        $user = Auth::user();
        $taches = $user->taches;
        return view('dashboard.dashboard',['user'=>$user,'taches'=>$taches]);
    }
}
