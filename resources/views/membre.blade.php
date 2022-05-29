@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue sur votre espace membre, {{ auth()->user()->prenomPersonne }} !</h1>
    @if(auth()->user()->joueur)
        Vous êtes joueur
    @elseif(auth()->user()->professeur)
        Vous êtes professeur
    @else 
        Vous n'êtes ni joueur ni professeur :/
    @endif
    <br>
    Quelle action souhaitez vous réaliser ?
    <div id="actionList">
        <a href="{{ url('membre/instruments') }}"><button>Mes instruments</button></a>
        <a href="{{ url('membre/cours') }}"><button>Mes cours</button></a>
    </div>
    <a href="{{ url('logout') }}"><button>Se déconnecter</button></a>
</div>
@endsection
