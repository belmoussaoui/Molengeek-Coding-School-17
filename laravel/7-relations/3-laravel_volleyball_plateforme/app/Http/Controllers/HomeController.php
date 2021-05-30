<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $equipes = Equipe::all();

        $equipes_remplies = Equipe::where('max', '9')->get();
        $equipes_non_remplies = Equipe::where("max", "!=", "9")->get();
        $joueurs_avec_equipe = Joueur::whereNotNull("equipe_id")->get();
        if (count($joueurs_avec_equipe) >= 4) {
            $joueurs_avec_equipe = $joueurs_avec_equipe->random(4);
        }
        $joueurs_sans_equipe = Joueur::where("equipe_id", 5)->get();
         if (count($joueurs_sans_equipe) >= 4) {
            $joueurs_sans_equipe = $joueurs_sans_equipe->random(4);

        }
        $equipes_europe = Equipe::where("continent_id", "1")->get();
        $equipes_hors_europe = Equipe::where("continent_id", "!=", "1")->where("continent_id", "!=", "6")->get();
        $joueuses_au_hasard = Joueur::where("genre_id" , "2")->whereNotNull("equipe_id")->get()->random(5);
        $joueurs_homme =  Joueur::where("genre_id" , "1")->whereNotNull("equipe_id")->get()->random(5);
        
        return view('home', compact(
            "equipes",
            "equipes_remplies",
            "equipes_non_remplies",
            "joueurs_sans_equipe",
            "joueurs_avec_equipe",
            "equipes_europe",
            "equipes_hors_europe",
            "joueuses_au_hasard",
            "joueurs_homme"
        ));
    }
}
