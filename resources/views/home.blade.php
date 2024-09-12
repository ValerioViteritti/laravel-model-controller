{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    {{-- @dump($movies) --}}
    <div class="container my-5">
        <h1>{{ $title }}</h1>
        <div class="row">
            {{-- <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid"> --}}


            @forelse ($movies as $movie)
                <div class="card" style="width: 15rem;">
                    <img src="{{ $movie->img }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text"><em>{{ $movie->description }}</em></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Titolo originale: </b><br>{{ $movie->original_title }}</li>
                        <li class="list-group-item"><b>Nazionalità: </b><br>{{ $movie->nationality }}</li>
                        <li class="list-group-item"><b>Data: </b><br>{{ $movie->date }}</li>
                        <li class="list-group-item"><b>Voto: </b><br>{{ $movie->vote }}</li>

                    </ul>
                    <a href="{{ route('movieDetails', ['id' => $movie->id]) }}" class="btn btn-success">Dettagli</a>
                    <div class="card-body">
                        {{-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> --}}
                    </div>
                </div>

            @empty
                <h2>La ricerca non ha dato nessun risultato</h2>
            @endforelse



        </div>


    </div>
@endsection


@section('titlePage')
    Home
@endsection
