@extends('layout.app')

@section('containt')
<div class="container">
    <div class="row p-4 justify-center mt-4">
        <div class="col-4 p-4 mt-4 shadow bg-teal-100">
            <div class="titre text-center p-4"><h2><b>Inscription</b></h2></div>
            <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
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
                    <label for="InputName" class="form-label">Nom</label>
                    <input type="text" name="name" class="form-control" id="InputName">
                    @error('name')
                      <div class="alert alert-danger" role="alert">
                          veuillez votre nom
                        </div>
                      @enderror
                  </div>
                <div class="mb-3">
                  <label for="InputPassword1" class="form-label">Mot de passe</label>
                  <input type="password" name="password" class="form-control" id="InputPassword1">
                  @error('password')
                    <div class="alert alert-danger" role="alert">
                        veuillez rentrer votre mot de passe
                      </div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                  <label class="form-check-label" for="exampleCheck1">votre photo de profile</label>
                  <input type="file" class="form-file-input" name="image" id="exampleCheck1">
                  @error('image')
                    <div class="alert alert-danger" role="alert">
                        veuillez rentrer votre photo de profile
                      </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">s'inscrire</button>
                <a href="{{route('auth.index')}}" class="text-info ml-2">Deja inscrit, nous rejoindre?</a>
              </form>
        </div>
    </div>
</div>
@endsection
