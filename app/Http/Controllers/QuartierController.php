<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quartier;
class QuartierController extends Controller
{
    //
    function index(){
        $quartiers=Quartier::query()->get();
        return view('quartiers',compact('quartiers'));
    }
    function create(){
        return view('quartierForm');
    }
    function store(Request $request){
        $quartier=new Quartier();
        $quartier->quartier=$request->quartier;
        $quartier->save();
        return redirect('/dashbord/quartiers');
    }
    function edit($id){
        $quartier=Quartier::find($id);
        return view('quartierEditForm',compact('quartier'));
    }
    function update(Request $request){
        $quartier=Quartier::find($request->id);
        $quartier->quartier=$request->quartier;
        $quartier->save();
        return redirect('/dashbord/quartiers');
    }
    function delete($id){
        $quartier=Quartier::find($id);
        if($quartier){
            $quartier->delete();
            return redirect('/dashbord/quartiers');
        }
    }
    function sites($id){
        $quartier=Quartier::find($id);
        return view('sitesParCategorie',compact('quartier'));
    }
}
