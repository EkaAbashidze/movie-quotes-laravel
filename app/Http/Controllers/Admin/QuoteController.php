<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
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
      $quote = [
        'en' => $attributes['quote']['en'],
        'ka' => $attributes['quote']['ka'],
      ];

      $quoteModel = new Quote();
      $quoteModel->quote = $quote;
      $quoteModel->movie_id = $attributes['movie_id'];

      $path = $request->file('thumbnail')->store('thumbnails');
      $thumbnail = $path; 
      $quoteModel->thumbnail = $thumbnail;

      $quoteModel->save();

      return redirect()->route('admin.dashboard')->with('success', 'Quote created successfully.');
  }

  public function edit(Quote $quote)
  {
      $movies = Movie::all();
      $quote->trans = $quote->getTranslations('quote');
      return view('editquote', compact('quote', 'movies'));
  }

  public function update(UpdateQuoteRequest $request, Quote $quote)
  {
      $attributes = $request->validated();

      $quote->replaceTranslations('quote', [
        'en' => $attributes['quote']['en'],
        'ka' => $attributes['quote']['ka'],
      ]);

      if (!empty($attributes['thumbnail'])) {
        $path = $attributes['thumbnail']->store('thumbnails'); 
         $thumbnail = $path; 
         $quote->thumbnail = $thumbnail; 
      }

      $quote->update();

      return redirect()->route('admin.dashboard')->with('success', 'Quote updated successfully.');
  }

    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Quote deleted successfully.');
    }
}