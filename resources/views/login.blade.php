<x-html/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
  <title>Admin Login</title>
</head>
<body>

<div class="flex bg-blue-dark w-full h-screen justify-center items-center">

  <div class="max-w-md w-full">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-4">{{ __('messages.log_in') }}</h1>
            <form method="POST" action="{{ route('admin.authorized') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        {{ __('messages.email') }}
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        {{ __('messages.password') }}
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" id="password" type="password" name="password" required>
                    @error('password')
                        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    {{ __('messages.log_in') }}
                </button>
            </form>
        </div>
    </div>

    </div>

</body>
</html>