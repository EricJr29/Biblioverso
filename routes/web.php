<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController  ;


Route::view('/', '/home');
Route::redirect('/home', '/');

// Usuario
Route::resource('/login', UserController::class);
Route::view('/usuario/entrar', 'usuario/entrar');
Route::view('/usuario/cadastrar', 'usuario/cadastrar');
Route::post('cadastrarUsuario', [UserController::class , 'store'])->name('cadastrar.usuario');
Route::post('entrarUsuario', [UserController::class , 'login'])->name('entrar.usuario');

Route::get('/cu', [UserController::class, 'all']);