{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    @dump($movies)
    <div class="container my-5">
        <div class="row">

            <h1></h1>
            {{-- <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid"> --}}

            @foreach ($movies as $movie)
                <div class="card" style="width: 15rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Titolo originale: {{ $movie->original_title }}</li>
                        <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Data: {{ $movie->date }}</li>
                        <li class="list-group-item">Voto: {{ $movie->vote }}</li>

                    </ul>
                    <div class="card-body">
                        {{-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> --}}
                    </div>
                </div>
            @endforeach



        </div>


    </div>
@endsection


@section('titlePage')
    home
@endsection
