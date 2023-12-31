<x-html/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
  <title>Update Quote</title>
</head>
<body>

<div class="flex flex-row h-screen w-full">
  <x-menu/>
    <div class="flex flex-col flex-1 bg-gray-100 p-8">
      <h2 class="text-2xl font-bold mb-8">{{ __('messages.edit_quote') }}</h2>
      <form method="POST" action="{{ route('quotes.update',$quote->id) }}" class="w-[1000px] bg-white rounded-lg p-8 shadow-lg" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="mb-4">
            <label for="quote-en" class="block text-gray-700 font-bold mb-2">{{ __('messages.quote_en') }}</label>
            <textarea id="quote-en" name="quote[en]" class="w-full border border-gray-300 p-2 rounded-md" rows="4" required>{{ $quote->trans['en'] }}</textarea>
          </div>
          <div class="mb-4">
            <label for="quote-ka" class="block text-gray-700 font-bold mb-2">{{ __('messages.quote_ka') }}</label>
            <textarea id="quote-ka" name="quote[ka]" class="w-full border border-gray-300 p-2 rounded-md" rows="4" required>{{ $quote->trans['ka'] }}</textarea>
          </div>
            <div class="mb-4">
              <label for="movie" class="block text-gray-700 font-bold mb-2">{{ __('messages.movie') }}</label>
              <select id="movie" name="movie_id" class="w-full border border-gray-300 p-2 rounded-md">
                <option value="">{{ __('messages.select_movie') }}</option>
                  @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" @if($quote->movie_id == $movie->id) selected @endif>{{ __($movie->title) }}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-4">
              <label for="thumbnail" class="block text-gray-700 font-bold mb-2"">{{ __('messages.thumbnail') }}</label>
              <input type="file" id="thumbnail" name="thumbnail" class="w-full border border-gray-300 p-2 rounded-md">
            </div>
            <div class="flex justify-end">
              <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700">{{ __('messages.update') }}</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
