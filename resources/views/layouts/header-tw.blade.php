<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

<header>
  <!-- Fixed navbar -->
  <nav class="py-4 pl-4 pr-6 top-0 w-full bg-white text-center hidden sm:flex shadow shadow-gray-300		">
    <a class="flex items-center justify-center" href={{ URL::to('') }}>
      <img class="hidden sm:inline logo" src="/img/logo-3.png" alt="Logo">
      <img class="sm:hidden logo" src="/img/logo-3-sm.png" alt="Logo">
    </a>
    <ul class="ml-auto flex items-center space-x-4">
      <li>
        <a class="text-gray-500 hover:text-gray-900" href={{ URL::to('lessons') }}>Lessons</a>
      </li>
      <li>
        <a class="text-gray-500 hover:text-gray-900" href={{ URL::to('grammar') }}>Grammar</a>
      </li>

      @if(Route::has('login'))
        @auth
          <li class="relative group">
            <a class="text-gray-500 hover:text-gray-900 cursor-pointer">Account</a>
            <div class="absolute hidden group-hover:block bg-white border border-gray-300 rounded mt-2">
              <a class="block px-4 py-2 text-gray-500 hover:bg-gray-100" href='/dashboard'>Dashboard</a>
              <a class="block px-4 py-2 text-gray-500 hover:bg-gray-100" href='/flashcard-studying'>Manage Flashcards</a>
              <a class="block px-4 py-2 text-gray-500 hover:bg-gray-100" href='/study-record/test'>Study Flashcards</a>
              <a class="block px-4 py-2 text-gray-500 hover:bg-gray-100" href='/logout'>Logout</a>
            </div>
          </li>
        @else
          <li>
            <a class="text-gray-500 hover:text-gray-900" href="{{ route('login') }}">Login</a>
          </li>
        @endauth
      @endif
    </ul>
  </nav>

  <!-- Mobile navbar -->
  <nav class="py-2 px-4 w-full bg-white text-center sm:hidden">
    <a class="flex items-center justify-center" href={{ URL::to('') }}>
      <img class="hidden sm:inline logo" src="/img/logo-3.png" alt="Logo">
      <img class="sm:hidden logo" src="/img/logo-3-sm.png" alt="Logo">
    </a>
    <ul class="ml-auto flex items-center">
      <li class="relative group">
        <a class="text-gray-700 hover:text-gray-900 cursor-pointer">Menu</a>
        <div class="absolute hidden group-hover:block bg-white border border-gray-300 rounded mt-2">
          <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href={{ URL::to('lessons') }}>Lessons</a>
          <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href={{ URL::to('grammar') }}>Grammar</a>
          <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href={{ URL::to('about') }}>About</a>

          <div class="border-t border-gray-300"></div>

          @if(Route::has('login'))
            @auth
              <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href='/dashboard'>Dashboard</a>
              <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href='/flashcard-studying'>Manage Flashcards</a>
              <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href='/study-record/test'>Study Flashcards</a>
              <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href='/logout'>Logout</a>
            @else
              <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100 underline" href="{{ route('login') }}">Login</a>
            @endauth
          @endif
        </div>
      </li>
    </ul>
  </nav>
</header>
