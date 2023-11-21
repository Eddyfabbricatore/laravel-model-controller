<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index(){
        $title = 'I film più votati';
        $movies = Movie::orderBy('vote', 'desc')->get();

        return view('movies', compact('movies', 'title'));
    }

    public function moviesDetails($id){
        $movie = Movie::find($id);

        return view('movie_details', compact('movie'));
    }
}
