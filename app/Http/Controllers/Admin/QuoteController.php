<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\EditQuoteRequest;
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

        $attributes = $request->validated();

        $quote = new Quote();
        $quote->quote_en = $attributes['quote_en'];
        $quote->quote_ka = $attributes['quote_ka'];
        $quote->movie_id = $attributes['movie_id'];

        $quote->thumbnail = $request->file('thumbnail')->store('thumbnails');
        $quote->save();

        return redirect()->route('admin.dashboard')->with('success', 'Quote created successfully.');
    }



    public function edit($id)
    {
        $quote = Quote::find($id);
        $movies = Movie::all();
        return view('editquote', compact('quote', 'movies'));
    }

    public function update(EditQuoteRequest $request, Quote $quote)
    {

        $attributes = $request->validated();

        $quote->quote_en = $attributes['quote_en'];
        $quote->quote_ka = $attributes['quote_ka'];
        $quote->movie_id = $attributes['movie_id'];

        if ($request->hasFile('thumbnail')) {
                $quote->thumbnail = $request->file('thumbnail')->store('thumbnails');
            }
            
        $quote->save();

        return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully.');
    }


        
    public function destroy($id)
    {
        $quote = Quote::find($id);

        $quote->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Quote deleted successfully.');
    }
}