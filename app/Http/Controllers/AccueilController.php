<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Site;
class AccueilController extends Controller
{
    //
    function index(){
        $categories=Categorie::query()->get();
        $lessites=Site::query()->get();
        return view('index',compact('categories','lessites'));
    }
}
