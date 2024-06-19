<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('index');
});

Route::get('/details',[SiteController::class,'details']);
Route::get('/map',function(){
    return view('map');
});
Route::get('/signIn',[UserController::class,'create']);
Route::post('/signIn',[UserController::class,'store']);

Route::get('/logIn', function(){
    return view('logIn');
});
Route::post('/logIn',[UserController::class,'login']);