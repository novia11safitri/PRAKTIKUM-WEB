<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::resource('penduduk', PendudukController::class);

Route::get('/sembako', function () {
    return view('sembako.sembako');
})->name('datasembako');

Route::get('/tunai', function () {
    return view('tunai.tunai');
})->name('datablt');

Route::get('/rumah', function () {
    return view('rumah.rumah');
})->name('bedahrumah');
