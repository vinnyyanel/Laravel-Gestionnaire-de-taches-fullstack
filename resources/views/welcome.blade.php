@extends('layout.app')

@section('containt')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/icons/simple.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-black">
          <h1>Mes taches</h1>
          <h5>vos taches au plus pres de vous</h5>
        <p>meilleur site de gestion de taches</p>
        <a href="{{route('user.create')}}" class="btn btn-info">Nous rejoindre</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/icons/erreur.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-black">
            <h1>Mes taches</h1>
            <h5>vos taches au plus pres de vous</h5>
          <p>meilleur site de gestion de taches</p>
          <a href="{{route('user.create')}}" class="btn btn-info">Nous rejoindre</a>
          </div>
      </div>
      <div class="carousel-item">
        <img src="/icons/profil.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-black">
            <h1>Mes taches</h1>
            <h5>vos taches au plus pres de vous</h5>
          <p>meilleur site de gestion de taches</p>
          <a href="{{route('user.create')}}" class="btn btn-info">Nous rejoindre</a>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
