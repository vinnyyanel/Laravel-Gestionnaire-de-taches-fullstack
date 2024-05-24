@extends('layout.app')

@section('containt')
<div class="container">
    <div class="row p-4 justify-center mt-4">
        <div class="col-4 p-4 mt-4 shadow bg-teal-100">
            <div class="titre p-4 text-center"><b><h2>Connexion</h2></b></div>
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <form method="POST" action="{{route('auth.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="InputEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        veuillez une addresse email valide
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="InputPassword1" class="form-label">Mote de passe</label>
                  <input type="password" name="password" class="form-control" id="InputPassword1">
                  @error('password')
                    <div class="alert alert-danger" role="alert">
                        veuillez rentrer votre mot de passe
                      </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <a href="{{route('user.create')}}" class="text-info ml-2">pas de compte ,nous rejoindre?</a>
              </form>
        </div>
    </div>
</div>
@endsection
