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


    <h1 class="text-3xl font-bold text-white font-roboto pt-[79px] pb-[82px] w-[750px] ml-[540px]">{{ __($movie->title) }}</h1>

    @foreach($movie->quotes as $quote)

    <div class="flex flex-col justify-center">

      <div class="mx-auto flex flex-col content-center justify-evenly">

        <div class="w-[748px] h-[533px] bg-white flex flex-col items-center overflow-hidden rounded-md mb-[67px]">

        <img class="min-w-[100%] border border-black" src="{{ asset('storage/thumbnails/image.png') }}" alt="{{ __('Movie Scene') }}">

          <h1 class="text-3xl font-bold text-gray-dark mt-[32px] px-[20px]">{{ __($quote->text) }}</h1>

        </div>

      </div>

    </div>

    @endforeach

</body>
</html>