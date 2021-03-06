<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //import controller terlebih dahulu
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});


route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::group(['middleware' => ['auth','ceklevel:admin,operator']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
});
