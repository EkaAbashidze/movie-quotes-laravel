<x-html/>
  <title>Create Quote</title>
</head>
<body>


<div class="flex flex-row h-screen w-full">


<x-menu/>



        <div class="flex flex-col flex-1 bg-gray-100 p-8">
            <h2 class="text-2xl font-bold mb-8">{{ __('messages.create_quote') }}</h2>


            <form method="POST" action="{{ route('quotes.store') }}" class="w-[1000px] bg-white rounded-lg p-8 shadow-lg" enctype="multipart/form-data">

                @csrf

            <div class="mb-4">
                <label for="quote" class="block text-gray-700 font-bold mb-2">{{ __('messages.quote_en') }}</label>
                <textarea id="quote" name="quote[en]" class="w-full border border-gray-300 p-2 rounded-md" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label for="quote" class="block text-gray-700 font-bold mb-2">{{ __('messages.quote_ka') }}</label>
                <textarea id="quote" name="quote[ka]" class="w-full border border-gray-300 p-2 rounded-md" rows="4" required></textarea>
            </div>

                <div class="mb-4">
                    <label for="movie" class="block text-gray-700 font-bold mb-2">{{ __('messages.movie') }}</label>
                    <select id="movie" name="movie_id" class="w-full border border-gray-300 p-2 rounded-md">
                        <option value="">{{ __('messages.select_movie') }}</option>
                        @foreach($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="thumbnail" class="block text-gray-700 font-bold mb-2"">{{ __('messages.thumbnail') }}</label>
                    <input type="file" id="thumbnail" name="thumbnail" class="w-full border border-gray-300 p-2 rounded-md" required>
                </div>
                <div class="flex w-full">
                    <button type="submit" class="bg-blue-dark text-white px-4 py-2 rounded-md text-sm font-medium flex-end">{{ __('messages.create_quote') }}</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>