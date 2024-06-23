<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AccueilController;

Route::get('/', [AccueilController::class,'index']);

Route::get('/details',[SiteController::class,'details']);
Route::get('/details/{id}',[SiteController::class,'details']);

Route::get('/map',function(){
    return view('map');
});
Route::get('/signIn',[UserController::class,'create']);
Route::post('/signIn',[UserController::class,'store']);

Route::get('/logIn', function(){
    return view('logIn');
});
Route::post('/logIn',[UserController::class,'login']);
Route::get('/dashbord',function(){
    return view('/dashbord');
});
//sites
Route::get('/dashbord/sites',[SiteController::class,'index']);
Route::get('/dashbord/sites/create',[SiteController::class,'create']);
Route::post('/dashbord/sites/store',[SiteController::class,'store']);
Route::get('/dashbord/sites/{id}/edit',[SiteController::class,'edit']);
Route::post('/dashbord/sites/{id}/edit',[SiteController::class,'update']);
Route::post('/recherche', [SiteController::class,'search']);

//categories
Route::get('dashbord/categories',[CategorieController::class,'index']);
Route::get('dashbord/categories/create',[CategorieController::class,'create']);
Route::post('dashbord/categories/store',[CategorieController::class,'store']);
Route::get('/dashbord/categories/{id}/edit',[CategorieController::class,'edit']);
Route::post('/dashbord/categories/{id}/edit',[CategorieController::class,'update']);
Route::get('/dashbord/categories/{id}/delete',[CategorieController::class,'delete']);
Route::get('/dashbord/categories/{id}/sites',[CategorieController::class,'sites']);


//quartiers
Route::get('dashbord/quartiers',[QuartierController::class,'index']);
Route::get('dashbord/quartiers/create',[QuartierController::class,'create']);
Route::post('dashbord/quartiers/store',[QuartierController::class,'store']);
Route::get('/dashbord/quartiers/{id}/edit',[QuartierController::class,'edit']);
Route::post('/dashbord/quartiers/{id}/edit',[QuartierController::class,'update']);
Route::get('/dashbord/quartiers/{id}/delete',[QuartierController::class,'delete']);
Route::get('/dashbord/quartiers/{id}/sites',[QuartierController::class,'sites']);

//images
Route::get('dashbord/images',[ImageController::class,'index']);
Route::post('dashbord/images/store',[ImageController::class,'store']);
Route::get('dashbord/images/{id}/delete',[ImageController::class,'delete']);
Route::get('dashbord/images/{id}/edit',[ImageController::class,'update']);

//utilisateurs
Route::get('dashbord/users',[UserController::class,'index']);