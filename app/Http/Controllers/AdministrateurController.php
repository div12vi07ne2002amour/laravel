<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;
use Illuminate\Support\Facades\Auth;


class AdministrateurController extends Controller
{
    public function admin_administrateur()
    {
        return view('admin.Admin');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }
    
    public function login_submint(Request $request)
    {  
        $request->validate([
            'email' => 'required|email|unique:users',
            'MDP' => 'required|min:8',
        ]);
        $credential = $request->only('email','password');
        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended(route('admin.etudiant'));
        }
        return back()->withErrors(['email'=>'les informations d/identification fournies ne correspondent pas']);
        //return view('admin.login.submit');
    }

    //public function login(Request $request)
    //{
     //   $request->validate([
     //       'email' => 'required|email|unique:users',
     //       'MDP' => 'required|min:8',
      // ]);
        
     //   $credential = $request->only('email','password');
     //   if (Auth::guard('admin')->attempt($credentials)){
     //       return redirect()->intended(route('admin.etudiant'));
     //   }
      //  return back()->withErrors(['email'=>'les informations d/identification fournies ne correspondent pas']);
    //}//
    public function administrateur_admin_traitement(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'MDP' => 'required|min:8',
        ]);
    
        $Admin = new Administrateur();
        $Admin->nom = $request->nom;
        $Admin->prenom = $request->prenom;
        $Admin->MDP = bcrypt($request->MDP);
        $Admin->email = $request->email;
        $Admin->save();
    
        return redirect('/admin')->with('status', 'L/administrateur a été créé avec succès.');
    }
    
}
