<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casting;

class CastingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $castings = Casting::all();
        return view("casting.index", compact("castings"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(casting $casting)
    {
        $castings = casting::all();

        return view('casting.show', compact('castings'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(casting $casting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, casting $casting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(casting $casting)
    {
        //
    }

    /**
     * Pour le controller pour postuler
     */
    public function postule(casting $casting)
    {
        $castings = casting::all();

        return view('casting.postule', compact('castings'));
    }

    // Gère la soumission du formulaire de postulation
    public function store(Request $request)
    {
        // Valide les données du formulaire
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:3',
            'phone' => 'required|string|max:10',
            'email' => 'required|email|max:50',
            'consent' => 'required|accepted',
        ]);

        // Crée une nouvelle postulation avec les données validées
        Casting::create([
            'prenom_postule' => $request->first_name,
            'nom_postule' => $request->last_name,
            'age_postule' => $request->age,
            'num_postule' => $request->phone,
            'mail_postule' => $request->email,
        ]);

        // Redirige avec un message de succès
        return redirect()->back()->with('success', 'Votre candidature a été soumise avec succès!');
    }

}
