<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index() {
        $randomMovie = Movie::inRandomOrder()->first();
        return view('landing', ['movie' => $randomMovie]);
    }

    public function show(Movie $movie) {
        return view('listing', ['movie' => $movie]);
    }
}
