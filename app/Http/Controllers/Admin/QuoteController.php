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
        $quote->text = [
            'en' => $attributes['quote_en'],
            'ka' => $attributes['quote_ka'],
        ];
        $quote->movie_id = $attributes['movie_id'];

        $quote->thumbnail = $attributes['thumbnail']->store('thumbnails');
        $quote->save();

        return redirect()->route('admin.dashboard')->with('success', 'Quote created successfully.');
    }


}

// request()->file('thumbnail)->store('thumbnails'Z);