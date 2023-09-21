<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
