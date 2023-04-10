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

        $attributes = $request->validated();

        $quote = new Quote();
        $quote->quote_en = $attributes['quote_en'];
        $quote->quote_ka = $attributes['quote_ka'];
        $quote->movie_id = $attributes['movie_id'];

        $quote->thumbnail =$request->file('thumbnail')->store('thumbnails');
        $quote->save();

        return redirect()->route('admin.dashboard')->with('success', 'Quote created successfully.');
    }

        
    public function destroy($id)
    {
        $quote = Quote::find($id);

        $quote->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Quote deleted successfully.');
    }
}