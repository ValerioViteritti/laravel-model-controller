<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index(){

        $movies = Movie::orderBy('title')->get();
        $title = 'Elenco Film';

        return view('home', compact('movies', 'title'));

    }

    public function about(){

        return view('about');

    }

    public function contacts(){

        return view('contacts');

    }

    public function bestMovies(){

        $movies = Movie::where('vote', '>=', 9)->orderBy('title')->get();
        $title = 'I Migliori film';

        return view('home', compact('movies', 'title'));

    }

    public function movieDetails($id){

        $movie = Movie::find($id);

        return view('movieDetails', compact('movie'));

    }

    
}
