@extends('layout.dashboard')

@section('containt')

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-6 p-4 mt-4 shadow bg-teal-100">
            <ul class=" list-group list-group-flush ">
                <li class="list-group-item"><b>titre: </b> {{$tache->titre}}</li>
                <li class="list-group-item"><b>description:  </b>{{$tache->description}}</li>
                <li class="list-group-item"><b>statut: </b>{{$tache->statut}}</li>
                <li class="list-group-item"><b>Date d'écheance: </b> {{$tache->date_echeance}}</li>
            </ul>
            <div class="flex justify-around">
                <a href="{{route('tache.edith',['id'=>$tache->id])}}" class="card-link btn btn-outline-info">modifier</a>
                <a href="{{route('tache.destroy',['id'=>$tache->id])}}" class="btn btn-outline-danger">supprimer</a>
            </div>
        </div>
    </div>
</div>

@endsection
