<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function create() {
        $movies = Movie::all();
        return view('create', compact('movies'));
    }

public function store(Request $request)
    {
        $validatedData = $request->validate([
            'quote' => 'required|string',
            'movie' => 'required_without:new-movie|nullable|exists:movies,id',
            'new-movie' => 'required_without:movie|nullable|string|max:255',
        ]);

        if ($request->input('movie')) {
            $movieId = $request->input('movie');
        } else {
            $movie = Movie::create([
            'title' => $request->input('new-movie'),
            'description' => 'Default description',
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