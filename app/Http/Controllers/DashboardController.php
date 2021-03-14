<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {

        $UECountries=['Austria','Belgium','Bulgaria','Cyprus','Czech Republic','Denmark','Estonia','Finland','France','Germany','Greece','Hungary','Ireland','Italy','Latvia','Lithuania','Luxembourg','Malta','Netherlands','Poland','Portugal','Romania','Slovakia','Slovenia','Spain','Sweden','United Kingdom'];
        $joueurs=Joueur::all();
        $equipes=Equipe::all();
        $notFull=[];
        foreach ($equipes as $equipe) {
            if ($equipe->maxPlayers > count($joueurs->where('equipe_id',$equipe->id))) {
                array_push($notFull,$equipe);
            }
        }
        $notFull2=array_rand($notFull,2);

        $EUteams=[];
        $noEUteams=[];
        foreach ($equipes as $equipe) {
            if (in_array($equipe->pays,$UECountries)) {
                array_push($EUteams,$equipe);
            }
            else{
                array_push($noEUteams,$equipe);
            }
        }

        $rpzPlayers=[];

        foreach ($joueurs as $joueur) {
            if ($joueur->nat===$joueur->equipes->pays) {

                array_push($rpzPlayers,$joueur);
                # code...
            }
        }

        $haveTeam=[];

        foreach ($joueurs as $joueur ) {

            if ($joueur->equipe_id != 1) {

                array_push($haveTeam,$joueur);
            }
            # code...
        }

        $girlInTeam=[];

        foreach ($haveTeam as $joueur) {

            if ($joueur->genre=='Femme') {
                array_push($girlInTeam,$joueur);   # code...
            }
        }

        $boyInTeam=[];
        foreach ($haveTeam as $joueur) {
            if ($joueur->genre=='Homme') {
                array_push($boyInTeam,$joueur);
            }
        }

        $rdmI=array_rand($boyInTeam,5);





        return view('dashboard',compact('joueurs','equipes','notFull','notFull2','noEUteams','EUteams','rpzPlayers','girlInTeam','boyInTeam','rdmI'));

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
        //
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
