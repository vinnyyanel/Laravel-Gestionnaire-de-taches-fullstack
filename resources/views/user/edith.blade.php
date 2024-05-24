@extends('layout.dashboard')

@section('containt')
<div class="container bg-teal-100">
    <div class="row justify-content-center mt-4">
        <div class="col-6 p-4 mt-4 shadow bg-teal-100">
            <b><h2 class="text-center">Modifier mes informations</h2></b>
            <form method="POST" action="{{ route('user.update', ['id'=>$user->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="name" class="form-control" id="nom" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">photo</label>
                    <input type="file" name="photoUrl" class="form-control" id="photo" value="{{ old('photoUrl', $user->photoUrl) }}">
                    @error('photoUrl')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>
@endsection
