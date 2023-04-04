<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Movie Quotes</title>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>
<body>

<div class="h-screen flex flex-col justify-center">

  <div class="mx-auto flex flex-col content-center justify-evenly pt-[79px]">

    <h1 class="text-3xl font-bold text-white font-roboto mb-[82px]">The Son of Soldier</h1>

    <div class="w-[748px] h-[533px] bg-white flex flex-col items-center overflow-hidden rounded-md">

      <img class="min-w-[100%] border border-black" src="{{ asset('image.png') }}" alt="Movie Scene">

      <h1 class="text-3xl font-bold text-gray-dark mt-[32px]">“What should I tell you your mother?!”</h1>

    </div>


  </div>

</div>


</body>
</html>