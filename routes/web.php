<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaControler;
use App\Http\Controllers\UsuarioControler;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('musica', MusicaControler::class);

Route::resource('usuario', UsuarioControler::class);

Route::fallback(function () {
    return view('erro');
});

