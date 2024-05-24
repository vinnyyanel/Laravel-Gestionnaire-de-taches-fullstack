<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/icons/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>mes taches</title>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="/">
                <img src="/icons/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Mes taches
              </a>
              <div class="nav-items flex">
                @auth
                <a href="{{route('user.show',['id'=>$user->id])}}" class="mr-4">
                    <img class="shrink-0 h-12 w-12 rounded-full" src="{{url($user->photoUrl)}}" alt="photo de profil" />
                </a>
                <form method="POST" action="{{route('auth.destroy')}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-info mr-3" type="submit">se deconnecter</button>
                </form>
                @endauth
                </div>
              </div>
          </nav>
    </header>
    @yield('containt')
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
