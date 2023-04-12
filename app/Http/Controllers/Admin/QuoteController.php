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



        $path = $request->file('thumbnail')->store('public/thumbnails');
        $thumbnail = str_replace('public/', '', $path);
        $quote->thumbnail = $thumbnail;




        $quote->save();

        return redirect()->route('admin.dashboard')->with('success', 'Quote created successfully.');
    }

public function edit(Quote $quote)
{
    $movies = Movie::all();
    $enTranslations = $quote->getTranslations('quote_en');
    $kaTranslations = $quote->getTranslations('quote_ka');

    return view('editquote', compact('quote', 'movies', 'enTranslations', 'kaTranslations'));
}

public function update(EditQuoteRequest $request, Quote $quote)
{

    $attributes = $request->validated();

    $quote->quote_en = $attributes['quote_en'];
    $quote->quote_ka = $attributes['quote_ka'];
    $quote->movie_id = $attributes['movie_id'];

    if ($request->hasFile('thumbnail')) {
        $path = $request->file('thumbnail')->store('public/thumbnails');
        $thumbnail = str_replace('public/', '', $path);
        $quote->thumbnail = $thumbnail;
    }
    
    $quote->save();

    $enTranslations = $quote->getTranslations('quote_en');
    $kaTranslations = $quote->getTranslations('quote_ka');

    return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully.');
}

        
    public function destroy($id)
    {
        $quote = Quote::find($id);

        $quote->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Quote deleted successfully.');
    }
}