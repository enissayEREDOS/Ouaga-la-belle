<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Categorie;
use App\Models\Quartier;
class SiteController extends Controller
{
    function index(){
        $sites = Site::with(['categorie', 'quartier'])->get();
        return view('site',compact('sites'));
    }
    public function create()
    {
        $categories = Categorie::all();
        $quartiers = Quartier::all();
        return view('siteForm', compact('categories', 'quartiers'));
    }

    function details(Request $request){
        $id = $request->input('id');
        $site=Site::findOrFail($request->id);
        return view('/detailSite',compact('site'));
    }
    function store(Request $request){
        $imagePath = $request->file('img')->store('image', 'public');
        $site=new Site();
        $site->nom=$request->nom;
        $site->latitude=$request->lat;
        $site->longitude=$request->lng;
        $site->description=$request->desc;
        $site->date_creation=$request->date_creation;
        $site->categorie_id=$request->categorie_id[0];
        $site->quartier_id=$request->quartier_id[0];
        $site->img=$imagePath;
        $site->save();
        return redirect('/dashbord/sites')->with('success', 'Site créé avec succès.');
    }
    function edit($id){
        $site=Site::find($id);
        $categories = Categorie::all();
        $quartiers = Quartier::all();
        return view('siteEditForm',compact('site','categories','quartiers'));
    }
    function update(Request $request){
        $imagePath = $request->file('img')->store('image', 'public');
        $site=Site::findOrFail($request->id);
        $site->nom=$request->nom;
        $site->latitude=$request->lat;
        $site->longitude=$request->lng;
        $site->description=$request->desc;
        $site->date_creation=$request->date_creation;
        $site->categorie_id=$request->categorie_id[0];
        $site->quartier_id=$request->quartier_id[0];
        $site->img=$imagePath;
        $site->save();
        return redirect('/dashbord/sites')->with('success', 'Site modifié avec succès.');;
    }
    function delete($id){
        $site=Site::find($id);
        if($site){
            $site->delete();
            return redirect('dashbord/sites');
        }
    }


    public function search(Request $request){
    $query = $request->input('recherche');
    $sites_rech = Site::where('nom', 'LIKE', "%$query%")
        ->orWhereHas('categorie', function ($q) use ($query) {
            $q->where('nom_cat', 'LIKE', "%$query%");
        })
        ->get();
    $nbrSite = $sites_rech->count();
    if ($nbrSite > 1) {
        return view('recherche', compact('sites_rech'));
    } elseif ($nbrSite == 1) {
        $site = $sites_rech->first();
        return view('detailSite', compact('site'));
    } else {
        $categories=Categorie::query()->get();
        return view('recherche',compact('sites_rech'))->with('message', 'Aucune donnée ne correspond à votre recherche');
    }
}

}
