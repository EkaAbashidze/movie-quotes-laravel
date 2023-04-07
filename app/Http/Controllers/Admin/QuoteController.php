<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function create() {
        $movies = Movie::all();
        return view('create', compact('movies'));
    }

public function store(StoreQuoteRequest $request)
    {
        if ($request->input('movie')) {
            $movieId = $request->input('movie');
        } else {
            $movie = Movie::create([
            'title' => $request->input('new-movie'),
            'description' => '...',
        ]);

            $movieId = $movie->id;
        }

        $quote = new Quote();
        $quote->text = $request->input('quote');
        $quote->movie_id = $movieId;
        $quote->save();

        return redirect()->route('admin.dashboard')->with('success', 'Quote created successfully.');
    }
}