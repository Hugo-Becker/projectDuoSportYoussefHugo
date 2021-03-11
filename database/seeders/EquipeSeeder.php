<?php

namespace Database\Seeders;

use App\Models\Equipe;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Equipe::factory()
        //     ->count(10)
        //     ->create();
        DB::table('equipes')->insert(
            [

                [
                    "clubName"=>"AKAIS",
                    "ville"=>"Charleroi",
                    "pays"=>"Belgium",
                    "maxPlayers"=>"10",
                    "maxAvants"=>"2",
                    "maxArrieres"=>"2",
                    "maxCentres"=>"4",
                    "maxRemplaçants"=>"2",
                   ],
                   [
                    "clubName"=>"Wonksterz",
                    "ville"=>"Caracas",
                    "pays"=>"Venezuela",
                    "maxPlayers"=>"12",
                    "maxAvants"=>"3",
                    "maxArrieres"=>"3",
                    "maxCentres"=>"4",
                    "maxRemplaçants"=>"2",
                   ],
                   [
                    "clubName"=>"Inspectorz",
                    "ville"=>"Manille",
                    "pays"=>"Philippines",
                    "maxPlayers"=>"10",
                    "maxAvants"=>"1",
                    "maxArrieres"=>"2",
                    "maxCentres"=>"4",
                    "maxRemplaçants"=>"2",
                   ],
                   [
                    "clubName"=>"Olive et Tom",
                    "ville"=>"Rovaniemi",
                    "pays"=>"Finland",
                    "maxPlayers"=>"11",
                    "maxAvants"=>"2",
                    "maxArrieres"=>"2",
                    "maxCentres"=>"4",
                    "maxRemplaçants"=>"3",
                   ],
                   [
                    "clubName"=>"WD-40",
                    "ville"=>"Gondar",
                    "pays"=>"Ethiopia",
                    "maxPlayers"=>"8",
                    "maxAvants"=>"1",
                    "maxArrieres"=>"1",
                    "maxCentres"=>"4",
                    "maxRemplaçants"=>"2",
                   ],
                   [
                    "clubName"=>"Scarletts",
                    "ville"=>"Baie St Anne",
                    "pays"=>"Seychelles",
                    "maxPlayers"=>"11",
                    "maxAvants"=>"2",
                    "maxArrieres"=>"2",
                    "maxCentres"=>"3",
                    "maxRemplaçants"=>"2",
                   ],
                   [
                    "clubName"=>"Neutrons",
                    "ville"=>"Vaiaku",
                    "pays"=>"Tuvalu",
                    "maxPlayers"=>"9",
                    "maxAvants"=>"2",
                    "maxArrieres"=>"2",
                    "maxCentres"=>"4",
                    "maxRemplaçants"=>"1",
                   ],
                   [
                    "clubName"=>"FBI",
                    "ville"=>"Tirana",
                    "pays"=>"Albania",
                    "maxPlayers"=>"7",
                    "maxAvants"=>"1",
                    "maxArrieres"=>"1",
                    "maxCentres"=>"3",
                    "maxRemplaçants"=>"2",
                   ],
                   [
                    "clubName"=>"Optils",
                    "ville"=>"Saint Marin",
                    "pays"=>"San Marino",
                    "maxPlayers"=>"10",
                    "maxAvants"=>"2",
                    "maxArrieres"=>"2",
                    "maxCentres"=>"3",
                    "maxRemplaçants"=>"3",
                   ],
                   [
                    "clubName"=>"Rokits",
                    "ville"=>"Barcelona",
                    "pays"=>"Spain",
                    "maxPlayers"=>"7",
                    "maxAvants"=>"1",
                    "maxArrieres"=>"1",
                    "maxCentres"=>"3",
                    "maxRemplaçants"=>"2",
                   ],



            ],
        );
}
}