<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminDashboardController extends Controller
{
    
public function index(): View
    {
        $movies = Movie::all();
        $quotes = Quote::all();
        return view('dashboard', compact('movies', 'quotes'));
    }
}