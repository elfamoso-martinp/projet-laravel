<?php

namespace App\Http\Controllers;

use App\Models\Joueurs;
use App\Models\User;
use Illuminate\Http\Request;

class UserControl extends Controller
{
    public function getUsers(){
        $users = User::all();
        return view('membres/listePersonnes',['personnes'=>$users]);
    }
}
