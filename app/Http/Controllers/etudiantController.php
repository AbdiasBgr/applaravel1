<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;

class etudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::paginate(4);
        return view('etudiant.liste2',compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'Etudiant a été ajouté avec succès');

    }
    public function modifier_etudiant($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.modifier',compact('etudiants'));
    }

    public function modifier_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->update();

        return redirect('/etudiant')->with('status', 'L\'Etudiant a été modifié avec succès');

    }

    public function supprimer_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/etudiant')->with('status', 'L\'Etudiant a été supprimé avec succès');

    }
}
 
