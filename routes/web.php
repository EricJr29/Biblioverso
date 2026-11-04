<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController  ;


Route::view('/', '/home');
Route::redirect('/home', '/');

// Usuario
Route::view('/login', 'login');
Route::view('usuario/cadastrar', 'usuario/cadastrar');
Route::post('/usuario', [UsuarioController::class , 'store'])->name('cadastrar.usuario');