<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DemendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/' , UserController::class );
Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');


});

Route:: resource('/dashboard', DemendController::class);
