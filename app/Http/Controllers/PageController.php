<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index(){

        $movies = Movie::orderBy('title')->get();

        return view('home', compact('movies'));

    }

    public function about(){

        return view('about');

    }

    public function contacts(){

        return view('contacts');

    }

    
}
