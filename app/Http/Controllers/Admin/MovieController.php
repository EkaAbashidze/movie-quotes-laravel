<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
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

        $quotes = $request->input('quotes');

        foreach($quotes as $quoteText) {
            $quote = new Quote();
            $quote->text = $quoteText;
            $quote->movie_id = $movie->id;
            $quote->save();
        }

        return redirect()->route('admin.dashboard')->with('success', 'Movie created successfully.');
    }




}
