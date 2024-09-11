<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();

        return view('home', ['movies' => $movies]);
    }

    public function about() {

        $movies = Movie::all();

        return view('about', ['movies' => $movies]);
    }

    public function votes() {

        $movies = Movie::all();

        return view('votes', ['movies' => $movies]);
    }

    public function movieDetail($id){
    
        $movie = Movie::find($id);

        return view('movieDetail', compact('movie'));
    }

}
