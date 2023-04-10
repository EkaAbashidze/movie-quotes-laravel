<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\EditMovieRequest;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create()
    {
        return view('createmovie');
    }


    public function store(StoreMovieRequest $request)
    {

        
        $movie = Movie::create([
            'title' => $request->input('title'),
            'description' => '...',
        ]);
        
        $movie->save();

        // $quotes = $request->input('quotes');

        // foreach($quotes as $quoteText) {
        //     $quote = new Quote();
        //     $quote->text = $quoteText;
        //     $quote->movie_id = $movie->id;
        //     $quote->save();
        // }

        $quote_en = $request->input('quote_en');
        $quote_ka = $request->input('quote_ka');

        foreach ($quote_en as $quoteBody) {
            $quote = new Quote();
            $quote->quote_en = $quoteBody;
            $quote->movie_id = $movie->id;
            $quote->save();
        }

        foreach ($quote_ka as $quoteBody) {
            $quote = new Quote();
            $quote->quote_ka = $quoteBody;
            $quote->movie_id = $movie->id;
            $quote->save();
        }


        return redirect()->route('admin.dashboard')->with('success', 'Movie created successfully.');
    }


    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('editmovie', compact('movie'));
    }

    public function update(EditMovieRequest $request, $id)
    {

        $movie = Movie::find($id);

        $movie->title = $request->input('title');
        $movie->description = $request->input('description');


        $quote_en = $request->input('quote_en');
        $quote_ka = $request->input('quote_ka');

          foreach ($movie->quotes as $i => $quote) {
              $quote->quote_en = $quote_en[$i];
              $quote->quote_ka = $quote_ka[$i];
              $quote->save();
          }

        $movie->save();

        return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully.');
    }

}