@extends('layout.dashboard')

@section('containt')

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-6 p-4 mt-4 shadow bg-teal-100">
            <div class="flex justify-around">
                <img class="shrink-0 h-25 w-25 rounded-full" src="{{url('/storage/images/vinnyyanel12@gmail.com.jpg')}}" alt="">
            </div>
            <ul class="list-group list-group-flush bg-teal-100 p-4 rounded-lg">
                <li class="list-group-item"><b>Nom: </b> {{$user->name}}</li>
                <li class="list-group-item"><b>email:  </b>{{$user->email}}</li>
             </ul>
            <div class="flex justify-around">
                <a href="{{route('user.edith',['id'=>$user->id])}}" class="card-link btn btn-outline-info">modifier</a>
            </div>
        </div>
    </div>
</div>

@endsection
