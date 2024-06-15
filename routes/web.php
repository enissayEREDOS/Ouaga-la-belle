<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/details',function(){ 
    return view('detailSite');
});
Route::get('/map',function(){
    return view('map');
});
Route::get('/signIn',function(){
    return view('signIn');
});
Route::get('logIn', function(){
    return view('logIn');
});