<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
class AccueilController extends Controller
{
    //
    function index(){
        $categories=Categorie::query()->get();
        return view('index',compact('categories'));
    }
}
