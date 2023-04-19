<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Create Movie</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
</head>
<body>

<div class="flex flex-row h-screen w-full">
    
 <x-menu/>

    <div class="flex flex-col flex-1 bg-gray-100 p-8">
        <h2 class="text-2xl font-bold mb-8">{{ __('messages.edit_movie') }}</h2>
        <form method="POST" action="{{ route('movies.update',$movie->id) }}" class="w-[1000px] bg-white rounded-lg p-8 shadow-lg">

            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">{{ __('messages.movie_title') }}</label>
                <input id="title" name="title[en]" type="text" class="w-full border border-gray-300 p-2 rounded-md" required value="{{ $movie->getTranslation('title', 'en') }}">
            </div>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">{{ __('messages.movie_title_geo') }}</label>
                <input id="title" name="title[ka]" type="text" class="w-full border border-gray-300 p-2 rounded-md" required value="{{ $movie->getTranslation('title', 'ka') }}">
            </div>


            <div class="flex w-full">
                <button type="submit" class="bg-blue-dark text-white px-4 py-2 rounded-md text-sm font-medium flex justify-center items-center">
                    {{ __('messages.update') }}
                </button>
            </div>
        </form>
    </div>

</div>

</body>
</html>