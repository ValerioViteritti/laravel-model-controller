@extends('layouts.main')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center g-2">
            <h1>{{ $movie->title }}</h1>
            <p>
                {{ $movie->description }}

            </p>
        </div>
        <a href="{{ route('home') }}" class="btn btn-warning">Torna alla Home</a>

    </div>
@endsection


@section('titlePage')
    Dettagli del Film
@endsection
