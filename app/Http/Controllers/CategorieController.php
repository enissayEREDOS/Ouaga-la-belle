<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Quartier;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    function index(){
        $categories=Categorie::query()->get();
        return view('categories',compact('categories'));
    }
    function create(){
        return view('categorieForm');
    }
    function store(Request $request){
        $categorie=new Categorie();
        $categorie->nom_cat=$request->nom_cat;
        $categorie->save();
        return redirect('/dashbord/categories');
    }
    function edit($id){
        $categorie=Categorie::find($id);
        return view('categorieEditForm',compact('categorie'));
    }
    function update(Request $request){
        $categorie=Categorie::find($request->id);
        $categorie->nom_cat=$request->nom_cat;
        $categorie->save();
        return redirect('/dashbord/categories');
    }
    function delete($id){
        $categorie=Categorie::find($id);
        if($categorie){
            $categorie->delete();
            return redirect('/dashbord/categories');
        }
    }
    function sites($id){
        $categorie=Categorie::find($id);
        return view('sitesParCategorie',compact('categorie'));
    }
}
