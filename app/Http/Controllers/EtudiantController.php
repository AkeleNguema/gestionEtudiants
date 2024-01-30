<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller

{
    public function liste_etudiant()
    {$etudiants = Etudiant:: all();
        return view ('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view ('etudiant.ajouter');

    }
    public function ajouter_etudiant_traitement(Request $_request)
    {   
        $_request ->validate ([

                'nom' => 'required',
                'prenom' => 'required',
                'classe' => 'required',


        ]);
        
       $etudiant = new Etudiant();
       $etudiant-> nom = $_request ->nom ;
       $etudiant-> prenom = $_request ->prenom ;
       $etudiant-> classe = $_request ->classe;
       $etudiant->save();

       return redirect ('/ajouter')->with ('status', ' bien venu cher etudiant');

    }

    public function update_etudiant($id)
    {$etudiants = Etudiant:: find($id);
        return view ('etudiant.update', compact('etudiants'));
       

    }
    
    public function update_etudiant_traitement(Request $_request)
    {
        $_request ->validate ([

            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',


    ]);
    
   $etudiant =  Etudiant::find($_request->id);
   $etudiant-> nom = $_request ->nom ;
   $etudiant-> prenom = $_request ->prenom ;
   $etudiant-> classe = $_request ->classe;
   $etudiant-> update ();
   return redirect ('/ajouter')->with ('status', '  modification réussi');

    }


}

