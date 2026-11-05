<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController  ;


Route::view('/', '/home');
Route::redirect('/home', '/');

// Usuario
Route::resource('/login', UsuarioController::class);
Route::view('/usuario/entrar', 'usuario/entrar');
Route::view('/usuario/cadastrar', 'usuario/cadastrar');
Route::post('cadastrarUsuario', [UsuarioController::class , 'store'])->name('cadastrar.usuario');
Route::post('entrarUsuario', [UsuarioController::class , 'login'])->name('entrar.usuario');

Route::get('/cu', [UsuarioController::class, 'all']);