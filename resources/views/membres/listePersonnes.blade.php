@extends('layouts.app')

@section('content')
<div class='container'>
    <table>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Adresse</th>
      <th scope="col">CP</th>
      <th scope="col">Mail</th>
    </tr>
  </thead>
  <tbody>
  @foreach($personnes AS $p)
        <tr>
            <th scope="row">{{$p->IdPersonnes}}</th>
            <td>{{$p->pseudo}}</td>
            <td>{{$p->nomPersonne}}</td>
            <td>{{$p->prenomPersonne}}</td>
            <td>{{$p->adressePersonne}}</td>
            <td>{{$p->cpPersonne}}</td>
            <td>{{$p->mail}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

    </table>
</div>

@endsection