<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::view('/', '/home');
Route::redirect('/home', '/');

// Usuario
Route::resource('/login', UserController::class);
Route::view('/usuario/entrar', 'usuario/entrar');
Route::view('/usuario/cadastrar', 'usuario/cadastrar');
Route::post('cadastrarUsuario', [UserController::class, 'store'])->name('cadastrar.usuario');
Route::post('entrarUsuario', [UserController::class, 'login'])->name('entrar.usuario');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/perfil', [UserController::class, 'meuPerfil']);
});

