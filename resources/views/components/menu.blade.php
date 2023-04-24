<div class="flex flex-col bg-blue-dark text-white w-64">
  <div class="p-8 text-3xl font-bold">{{ __('messages.admin_panel') }}</div>
  <ul class="flex flex-col p-8">
    <li class="py-2 hover:underline"><a href="/">{{ __('messages.main_page') }}</a></li>
    <li class="py-2 hover:underline"><a href="{{ route('movies.create') }}">{{ __('messages.create_movie') }}</a></li>
    <li class="py-2 hover:underline"><a href="{{ route('quotes.create') }}">{{ __('messages.create_quote') }}</a></li>
    <li class="py-2 hover:underline"><a href="#movies_list">{{ __('messages.movies_list') }}</a></li>
    <li class="py-2 hover:underline"><a href="#quotes_list">{{ __('messages.quotes_list') }}</a></li>
    <li class="py-2 hover:underline">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit">{{ __('messages.log_out') }}</button>
    </form>
    </li>
  </ul>
    
  <div class="flex flex-row justify-start items-center p-8">
    <form action="{{ route('language.change', 'en') }}" method="GET">     
      <input type="hidden" name="language" value="en">
      <button type="submit" class="border border-white w-10 h-10 rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer">En</button>
    </form>
    <form action="{{ route('language.change', 'ka') }}" method="GET">
        <input type="hidden" name="language" value="ka">
        <button type="submit" class="border border-white w-10 h-10 rounded-full text-white flex items-center font-roboto justify-center hover:text-gray-dark hover:bg-white cursor-pointer ml-4">Ka</button>
    </form>
  </div>
</div>