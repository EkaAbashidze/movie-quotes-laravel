<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Movie Quotes</title>
</head>
<body>

    <div class="flex flex-col gap-y-[15px] fixed top-[50%] left-[50px] top-1/2 transform  -translate-y-1/2" >
      <div class="border border-white w-[58px] h-[58px] rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer">En</div>
        <div class="border border-white w-[58px] h-[58px] rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer">Ka</div>
    </div>


    <div class="h-screen flex flex-col justify-center">

      <div class="mx-auto text-center flex flex-col content-center justify-evenly items-center">

      <img class="max-w-700 rounded-md" src="{{ asset('image.png') }}" alt="{{ __('Movie Scene') }}">
      <h1 class="text-3xl font-bold text-white mt-16 mb-28 max-w-[1000px]">{{ __($movie->description) }}</h1>
      @if($movie)
        <a href="{{ route('movies.show', $movie->id) }}" class="text-3xl font-bold text-white underline font-roboto">{{ __($movie->title) }}</a>
      @endif

      </div>

    </div>

</body>
</html>