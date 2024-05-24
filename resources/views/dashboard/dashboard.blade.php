@extends('layout.dashboard')

@section('containt')
<div class="container p-4">
    <div class="row text-center">
        <b><H1>Bienvenue {{$user->name}}</H1></b>
    </div>
    <div class="row">
        <div class="col">
            <div class="flex justify-between">
                <H4>Listes des taches</H4>
                @if(session('success'))
                    <div class="col-8 alert alert-success">
                        {{ session('success') }}
                    </div>
                 @endif
                <a class="btn btn-outline-info" href="{{route('tache.create',['id'=>$user->id])}}">ajouter</a>
            </div>
            <table class="table p-2 table-success table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Date d'écheance</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($taches as $tache)
                    @if ($tache->statut=='en_attente')
                    <tr class="table-danger" >
                        <th scope="row">{{$tache->id}}</th>
                        <td>{{$tache->titre}}</td>
                        <td><a href="{{route('tache.show',['id'=>$tache->id])}}" class="btn btn-outline-info">voir</a></td>
                        <td>{{$tache->statut}}</td>
                        <td>{{$tache->date_echeance}}</td>
                        <td><a href="{{route('tache.destroy',['id'=>$tache->id])}}" class="btn btn-outline-danger">supprimer</a></td>
                    </tr>
                    @else
                    <tr>
                        <th scope="row">{{$tache->id}}</th>
                        <td>{{$tache->titre}}</td>
                        <td><a href="{{route('tache.show',['id'=>$tache->id])}}" class="btn btn-outline-info">voir</a></td>
                        <td>{{$tache->statut}}</td>
                        <td>{{$tache->date_echeance}}</td>
                        <td><a href="{{route('tache.destroy',['id'=>$tache->id])}}" class="btn btn-outline-danger">supprimer</a></td>
                    </tr>

                    @endif

                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection


