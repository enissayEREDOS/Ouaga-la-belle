<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $users = User->findAll();
        return view('user', compact('users')); 
    }

    public function create(){
        return view('signIn');
    }

    public function store(Request $request){
        $existe=User::where('email',$request->email)->exists();
        if($existe){
            $user = User::where('email',$request->email)->first();
            return view('/editUser',compact('user'));
        }else{
            $user=new User();
            $user->nom=$request->nom;
            $user->prenom=$request->prenom;
            $user->sexe=$request->sexe;
            $user->date_nais=$request->date_nais;
            $user->telephone=$request->tel;
            $user->email=$request->email;
            $user->mot_de_passe=sha1($request->pwd);
            $user->save();
            return redirect('/');
        }
        
    }

    public function edit($id){
        $etudiant = Etudiant::find($id);
        return view('etudiantEdit', compact('etudiant'));
    }

    public function update(Request $request){
        $etudiant = Etudiant::findOrFail($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenoms = $request->prenoms;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->save();
        return redirect('/etudiants');
    }

    public function delete($id){
        $etudiant = Etudiant::find($id);
        if($etudiant){
            $etudiant->delete();
        }
        return redirect('/etudiants');
    }
    public function login(Request $request){
        $existe=User::where('email',"=",$request->email,'and','mot_de_passe','=',sha1($request->mot_de_passe))->exists();
        if($existe){
            echo('félicitation');
            
        }else{
              echo('mail ou mot de passe incorrect  ') ;
              echo(sha1($request->mot_de_passe)."+++".$request->mot_de_passe );
        }
    }
}
