<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My TailwindCSS Website</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="h-screen flex flex-col justify-center" style="background-image: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%);">

  <div class="mx-auto text-center flex flex-col content-center justify-evenly items-center">

      <img class="block max-w-700" src="{{ asset('image.png') }}" alt="Movie Scene">
      <h1 class="text-3xl font-bold text-white mt-16 mb-28">“What should I tell you your mother?!”</h1>
      <h1 class="text-3xl font-bold text-white underline font-roboto">The Son of Soldier</h1>

  </div>

</div>


</body>
</html>