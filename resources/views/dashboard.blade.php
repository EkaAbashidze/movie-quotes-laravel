<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
</head>
<body>


<div class="flex flex-row min-h-screen w-full">
    <div class="flex flex-col bg-blue-dark text-white w-64">
        <div class="p-8 text-3xl font-bold">Admin Panel</div>
        <ul class="flex flex-col p-8">
          <li class="py-2 hover:underline"><a href="#">Main Page</a></li>
          <li class="py-2 hover:underline"><a href="{{ route('movies.create') }}">Create Movie</a></li>
          <li class="py-2 hover:underline"><a href="{{ route('quotes.create') }}">Create Quote</a></li>
          <li class="py-2 hover:underline">

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Log Out</button>
          </form>


          </li>
        </ul>
        <div class="flex flex-row justify-start items-center p-8">
            <div class="border border-white w-10 h-10 rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer">En</div>
            <div class="border border-white w-10 h-10 rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer ml-4">Ka</div>
        </div>
    </div>
    <div class="flex flex-col flex-1 bg-gray-100 p-8">
        <h2 class="text-2xl font-bold mb-8">Movies List</h2>

          
        @foreach($movies as $movie)
            <div class="bg-white rounded-lg p-4 shadow-lg flex">
                <img src="{{ asset('storage/thumbnails/image.jpg') }}" alt="{{ $movie->title }} thumbnail" class="h-16 w-16 rounded-md object-cover mr-4">
                <div>
                    <h3 class="text-lg font-bold mb-2">{{ $movie->title }}</h3>
                    <div class="flex gap-x-[30px]">
                        <a href="{{ route('movies.edit', $movie->id) }}" class="text-blue-500 hover:underline">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-500 hover:underline">{{ __('Delete') }}</a>
                    </div>
                </div>
            </div>
        @endforeach

        <h2 class="text-2xl font-bold mb-8 mt-8">Quotes List</h2>
        <div class="grid grid-cols-1 gap-4">
        @foreach($quotes as $quote)
            <div class="bg-white rounded-lg p-4 shadow-lg flex">
                <div class="flex-shrink-0 mr-4">
                    <img src="{{ asset('storage/thumbnails/image.jpg') }}" alt="{{ $quote->text }}" class="w-16 h-16 rounded-md object-cover">
                </div>
                <div>
                    <p class="text-lg font-bold mb-2">{{ $quote->text }}</p>
                    <p class="text-gray-700 mb-2">{{ $quote->movie->title }}</p>
                    <div class="flex gap-x-[30px]">
                        <a href="#" class="text-blue-500 hover:underline">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-500 hover:underline">{{ __('Delete') }}</a>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</div>

</body>
</html>