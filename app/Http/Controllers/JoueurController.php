<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;


class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        return view('pages.allPlayers', compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipes = Equipe::all();
        return view('pages.addPlayer', compact('equipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $photo = new Photo;
        $photo->src = $request->file('src')->hashName();
        $photo->save();







        $joueur = new Joueur;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->genre = $request->genre;
        $joueur->nat = $request->nat;
        $joueur->poste = $request->poste;
        $joueur->tel = $request->tel;
        $joueur->email = $request->email;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->photo_id = $photo->id;



        $nbrPlayers = count(DB::table('joueurs')->where('equipe_id', $request->equipe_id)->get());
        $equipes = Equipe::all();


        $nbrPlayersAtPoste = count(DB::table('joueurs')->where('equipe_id', $request->equipe_id)->where('poste', $request->poste)->get());






        if ($equipes[($request->equipe_id) - 1]->maxPlayers > $nbrPlayers) {


            $path = "max" . $request->poste . "s";

            if ($equipes[($request->equipe_id) - 1]->$path > $nbrPlayersAtPoste) {

                Storage::put('public/img', $request->file('src'));
                $joueur->save();
                return redirect('/dashboard')->with('status', 'Profile saved!');
            } else {
                return redirect('/dashboard')->with('error', 'To many players at this poste');
            }
        } else {
            return redirect('/dashboard')->with('error', 'To many players in this team');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        $equipes = Equipe::all();
        $photos = Photo::all();

        return view('shows.showPlayer', compact('joueur', 'equipes', 'photos'));
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
