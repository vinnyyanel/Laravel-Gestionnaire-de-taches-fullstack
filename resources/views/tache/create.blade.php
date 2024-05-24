@extends('layout.app')

@section('containt')
<div class="container">
    <div class="row p-4 justify-center mt-4">
        <div class="col-4 p-4 mt-4 shadow bg-teal-100">
            <div class="titre p-4 text-center"><b><h2>Ajout d'une tache</h2></b></div>
            <form method="POST" action="{{route('tache.store',['id'=>$user_id])}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="InputTitre" class="form-label">Titre</label>
                  <input type="text" name="titre" class="form-control" id="InputTiTre">
                   @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="InputDescription" class="form-label">Description</label>
                  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                  @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select" name="statut" aria-label="Default select example">
                        <option selected>selectionner un statut</option>
                        <option value="en_attente">en_attente</option>
                        <option value="en_cours">en_cours</option>
                        <option value="terminee">terminee</option>
                    </select>
                    @error('statut')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label" for="DateEcheance">Date d'écheance</label>
                  <input type="date" class="form-input" name="date_echeance" id="DateEcheance">
                  @error('date_echeance')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">ajouter</button>
              </form>
        </div>
    </div>
</div>
@endsection
