<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaControler;
use App\Http\Controllers\UsuarioControler;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/', function () {
    return view('index');
})-> name('index');

Route::get('sabrina', function () {
    return view('index_sabrina');
})-> name('index_sabrina');

Route::get('nicolas', function () {
    return view('index_nicolas');
})-> name('index_nicolas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('musica', MusicaControler::class);

Route::resource('usuario', UsuarioControler::class);

Route::get('usuario', [UsuarioControler::class, 'perfil'])->middleware(['auth']);
Route::get('musica', [  MusicaControler::class, 'mostrar_musica'])->middleware('auth');

Route::fallback(function () {
    return view('erro');
});