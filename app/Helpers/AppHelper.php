<?php

namespace App\Helpers;

use App\Models\Joueurs;
use App\Models\Professeurs;
use Illuminate\Support\Facades\Auth;

class AppHelper{

    public function getRank(){
        $user = Auth::user();
        $id = $user->idPersonnes;
        if(Joueurs::find($id)){
            return 0;
        } else if(Professeurs::find($id)){
            return 1;
        }
    }

}
