<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes=Equipe::all();
        return view('pages.addPlayer',compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Storage::put('public/img', $request->file('src'));

        $photo=new Photo;
        $photo->src=$request->file('src')->hashName();
        $photo->save();


        $joueur=new Joueur;
        $joueur->nom=$request->nom;
        $joueur->prenom=$request->prenom;
        $joueur->age=$request->age;
        $joueur->genre=$request->genre;
        $joueur->nat=$request->nat;
        $joueur->poste=$request->poste;
        $joueur->tel=$request->tel;
        $joueur->email=$request->email;
        $joueur->equipe_id=$request->equipe_id;
        $joueur->photo_id=$photo->id;
        $joueur->save();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
}
