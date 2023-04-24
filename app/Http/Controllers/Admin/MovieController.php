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
        $movie->title = [
            'en' => $attributes['title']['en'],
            'ka' => $attributes['title']['ka'],
        ];
        $movie->save();
        return redirect()->route('admin.dashboard')->with('success', 'Movie created successfully.');
    }


    public function edit(Movie $movie)
    {
        $movie->trans = $movie->getTranslations('title');
        return view('editmovie', compact('movie'));
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $attributes = $request->validated();
        $movie->title->replaceTranslations('title', [
            'en' => $attributes['title']['en'],
            'ka' => $attributes['title']['ka'],
        ]);
        $movie->update();
        return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully.');
    }


    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Movie deleted successfully.');
    }
}