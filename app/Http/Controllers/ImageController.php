<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    function index(){
        $images=Image::query()->get();
        return view('images',compact('images'));
    }
    function create(){
        return view('ImageForm');
    }
    function store(Request $request){
        $path=$request->file('image')->store('image','public');
        $image=new Image();
        $image->nom_image=$path;
        $image->site_id=$request->site_id;
        $image->save();
        return redirect('/dashbord/sites');
    }
}
