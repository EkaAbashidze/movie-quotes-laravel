<x-html/>
  <title>Random Quote</title>
</head>
<body>



  
  <form action="{{ route('language.change', 'en') }}" method="GET">
  <div class="flex flex-col gap-y-[15px] fixed top-[50%] left-[50px] top-1/2 transform  -translate-y-1/2" >
            <input type="hidden" name="language" value="en">

      <button type="submit" class="border border-white w-[58px] h-[58px] rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer">En</button>

          </form>
    <form action="{{ route('language.change', 'ka') }}" method="GET">
              <input type="hidden" name="language" value="ka">

      <button type="submit" class="border border-white w-[58px] h-[58px] rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer">Ka</button>


    </div>
  </form>



    <div class="h-screen flex flex-col justify-center">

      <div class="mx-auto text-center flex flex-col content-center justify-evenly items-center">

      @php
        $randomQuote = $movie->quotes()->inRandomOrder()->first();
        $thumbnail = $randomQuote->thumbnail;
      @endphp

      <img class="max-w-[700px] rounded-md" src="{{ asset('storage') }}/{{ $thumbnail }}" alt="{{ __('Movie Scene') }}">

      @if($movie)

      <h1 class="text-3xl font-bold text-white mt-16 mb-28 max-w-[800px]">{{ __($randomQuote->quote) }}</h1>
        <a href="{{ route('movies.show', $movie->id) }}" class="text-3xl font-bold text-white underline font-roboto">{{ __($movie->title) }}</a>
      @endif

      </div>

    </div>

</body>
</html>