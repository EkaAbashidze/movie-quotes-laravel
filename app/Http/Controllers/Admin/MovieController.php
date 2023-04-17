<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMovieRequest;
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

    public function update(UpdateMovieRequest $request, Movie $movie)
    {

        $attributes = $request->validated();

        $movie->title = $attributes['title'];
        
        foreach ($movie->quotes as $i => $quote) {
            $quoteAttributes = [
                'quote' => [
                    'en' => $attributes['quote']['en'][$i],
                    'ka' => $attributes['quote']['ka'][$i],
                ]
            ];
            $quote->update($quoteAttributes);
        }

        $movie->update($attributes);

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