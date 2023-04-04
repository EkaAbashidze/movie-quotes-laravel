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

  <div class="mx-auto text-center flex flex-col content-center justify-evenly items-center">

      <img class="block max-w-700" src="{{ asset('image.png') }}" alt="Movie Scene">
      <h1 class="text-3xl font-bold text-white mt-16 mb-28">“What should I tell you your mother?!”</h1>
      <h1 class="text-3xl font-bold text-white underline font-roboto">The Son of Soldier</h1>

  </div>

</div>


</body>
</html>