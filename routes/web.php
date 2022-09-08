<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('LandingPageView');
})->name('home');

Route::get('/soon', function () {
    return view('comingsoon');
})->name('soon');


Route::get('/home', function () {
    return view('LandingPageView');
});

Route::get('/guidance', function () {
    return view('LandingPageView');
})->name('guidance');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
