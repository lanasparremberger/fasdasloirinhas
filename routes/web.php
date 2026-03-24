<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaControler;
use App\Http\Controllers\UsuarioControler;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('musica', MusicaControler::class);

Route::resource('usuario', UsuarioControler::class);