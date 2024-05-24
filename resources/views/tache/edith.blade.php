@extends('layout.app')

@section('containt')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-6 p-4 mt-4 shadow bg-teal-100">
            <b><h2 class="text-center">Modifier Tâche</h2></b>
            <form method="POST" action="{{ route('tache.update', ['id'=>$tache->id]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control" id="titre" value="{{ old('titre', $tache->titre) }}">
                    @error('titre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description">{{ old('description', $tache->description) }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                    <select name="statut" class="form-control" id="statut">
                        <option value="en_attente" {{ old('statut', $tache->statut) == 'en_attente' ? 'selected' : '' }}>En attente</option>
                        <option value="en_cours" {{ old('statut', $tache->statut) == 'en_cours' ? 'selected' : '' }}>En cours</option>
                        <option value="terminee" {{ old('statut', $tache->statut) == 'terminee' ? 'selected' : '' }}>Terminée</option>
                    </select>
                    @error('statut')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date_echeance" class="form-label">Date d'échéance</label>
                    <input type="date" name="date_echeance" class="form-control" id="date_echeance" value="{{ old('date_echeance', $tache->date_echeance) }}">
                    @error('date_echeance')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>
@endsection
