<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Cours;
use App\Models\Participent;


class MembreController extends Controller
{
    public function index()
    {
        $personnes = Auth::user();
        return view('membre');
    }

    public function cours(){
        $personnes = Auth::user();
        $allCours = Cours::all();
        $cours = $personnes->cours;
        return view('membres/cours', ['cours'=>$cours, 'allCours'=>$allCours]);
    }

    public function addUserToCours($idCours){
        $personnes = Auth::user();
    }
}
