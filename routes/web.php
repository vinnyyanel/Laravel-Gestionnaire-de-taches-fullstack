<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard/{id}',[DashboardController::class,'index'])->name('dashboard');

    Route::delete('/deconnexion',[AuthController::class,'destroy'])->name('auth.destroy');

    Route::get('/user/show/{id}',[UserController::class,'show'])->name('user.show');
    Route::get('/user/modifier/{id}',[UserController::class,'edit'])->name('user.edith');
    Route::put('/user/modifier/{id}',[UserController::class,'update'])->name('user.update');
    Route::delete('/user/supprimer/{id}',[UserController::class,'delete'])->name('user.destroy');

    Route::get('/tache/show/{id}',[TacheController::class,'show'])->name('tache.show');
    Route::post('/tache/create/{id}',[TacheController::class,'store'])->name('tache.store');
    Route::get('/tache/create/{id}',[TacheController::class,'create'])->name('tache.create');
    Route::get('/tache/modifier/{id}',[TacheController::class,'edit'])->name('tache.edith');
    Route::put('/tache/modifier/{id}',[TacheController::class,'update'])->name('tache.update');
    Route::delete('/tache/supprimer/{id}',[TacheController::class,'delete'])->name('tache.destroy');
});


Route::get('/inscription',[UserController::class,'create'])->name('user.create');
Route::post('/user/create',[UserController::class,'store'])->name('user.store');
Route::get('/connexion',[AuthController::class,'index'])->name('auth.index');
Route::post('/connexion/valide',[AuthController::class,'store'])->name('auth.store');
