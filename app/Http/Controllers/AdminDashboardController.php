<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    
public function index()
{
    $movies = Movie::all();
    $quotes = Quote::all();

    return view('dashboard', compact('movies', 'quotes'));
}

    
}
