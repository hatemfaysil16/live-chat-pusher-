<?php

use App\Http\Controllers\chatController;
use Illuminate\Support\Facades\Auth;
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


Route::group(
    [
        'middleware' => 'auth',
    ], function() { //...



    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('chat', [chatController::class,'chat']);

    Route::post('send', [chatController::class,'send']);

    Route::post('saveToSession', [chatController::class,'saveToSession']);

    Route::post('getOldMessages', [chatController::class,'getOldMessage']);


    Route::post('deleteSession', [chatController::class,'deleteSession']);


    Route::get('check',function(){
        return session('chat');
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



});

Auth::routes();
