<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\View\View;

class MoviesController extends Controller
{
    public function index(): View {
        $randomMovie = Movie::inRandomOrder()->first();
        return view('landing', ['movie' => $randomMovie]);
    }

    public function show(Movie $movie): View {
        return view('listing', ['movie' => $movie]);
    }
}
