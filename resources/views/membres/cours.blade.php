@extends('layouts.app')

@section('content')

Bienvenue sur vos cours !
<br>
    @if($cours)
        @foreach($cours AS $c)
            {{$c->Idcours}}
            {{$c->libelle}}
        @endforeach
    @else
        Vous n'avez pas cours :(
    @endif

    <br>

    <button id="buttonCours">S'inscrire à un cours</button>

    <div id="listeCours" style="display: none;">
            @if($allCours)
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID Cours</th>
                        <th scope="col">Libellé</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allCours AS $ac)

                    <tr>
                        <th scope="row">{{$ac->Idcours}}</th>
                        <td>{{$ac->libelle}}</td>
                        <td><button>S'inscrire</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                Il n'y a pas de cours dispo :(
            @endif


    </div>

    <script>
        $buttonCours = document.getElementById('buttonCours');
        $coursList = document.getElementById('listeCours');
        $buttonCours.addEventListener('click', () => {
            afficherCours();
        });

        function afficherCours(){
            if($coursList.style.display == 'none'){
                $coursList.style.display = 'block';
            } else {
                $coursList.style.display = 'none';
            }
        }
    

        $buttonInscriptionCours = document.querySelectorAll('table button');
        $buttonInscriptionCours.forEach(function(e, i){
            e.addEventListener('click', function(){
                $idCours = document.querySelectorAll('table tbody th')[i];
            });
        })
        </script>

@endsection