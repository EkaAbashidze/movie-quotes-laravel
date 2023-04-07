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
        <div class="flex flex-col bg-blue-dark text-white w-64">
            <div class="p-8 text-3xl font-bold">Admin Panel</div>
            <ul class="flex flex-col p-8">
                <li class="py-2 hover:underline"><a href="#">Main Page</a></li>
                <li class="py-2 hover:underline"><a href="#">Create Movie</a></li>
                <li class="py-2 hover:underline"><a href="#">Create Quote</a></li>
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
            <h2 class="text-2xl font-bold mb-8">Create Movie</h2>
            <form method="POST" action="{{ route('movies.store') }}" class="w-[1000px] bg-white rounded-lg p-8 shadow-lg">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input id="title" name="title" type="text" class="w-full border border-gray-300 p-2 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description (Optional):</label>
                    <textarea id="description" name="description" class="w-full border border-gray-300 p-2 rounded-md" rows="4" ></textarea>
                </div>
                <div class="mb-4">
                    <label for="quotes" class="block text-gray-700 font-bold mb-2">Quote:</label>
                    <div id="quotes-container">
                        <textarea name="quotes[]" class="w-full border border-gray-300 p-2 rounded-md" rows="2" required></textarea>
                    </div>
                </div>
                <div class="flex w-full">
                    <button type="submit" class="bg-blue-dark text-white px-4 py-2 rounded-md text-sm font-medium flex justify-center items-center">
                    Create Movie
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>