<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index() {
        return view('landing');
    }

    public function show(Movie $movie) {
        return view('listing', ['movie' => $movie]);
    }
}
