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

        
        $attributes = $request->validated();

        $movie = new Movie;
        $movie->title = $attributes['title'];
        $movie->save();

        return redirect()->route('admin.dashboard')->with('success', 'Movie created successfully.');
    }


    public function edit(Movie $movie)
    {
        return view('editmovie', compact('movie'));
    }

    public function update(EditMovieRequest $request, Movie $movie)
    {

        $attributes = $request->validated();

        $movie->title = $attributes['title'];
        $quote_en = $attributes['quote_en'];
        $quote_ka = $attributes['quote_ka'];

        foreach ($movie->quotes as $i => $quote) {
            $quote->quote_en = $quote_en[$i];
            $quote->quote_ka = $quote_ka[$i];
            $quote->save();
        }

        $movie->save();

        return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully.');
    }
    

    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->quotes()->delete();

        $movie->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Movie deleted successfully.');
    }
}