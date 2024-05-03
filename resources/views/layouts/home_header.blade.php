

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

      <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand navbar-light">

            <ul class="navbar-nav navbar-right  ml-auto">

              <li class="nav-item">
                <a class="nav-link" href={{ URL::to('lessons') }} >Lessons</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href={{ URL::to('grammar') }} >Grammar</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href= {{ URL::to('about') }} >About</a>
              </li>

              <!-- <li class="nav-item">
                <a class="nav-link" href="/blogs" >Blog</a>
              </li> -->



              @php //if(Route::has('login')) - COMMENT JG @endphp
              @if (false))                    
                    @auth

                    <li class="nav-item">
                      <span class="nav-link">Logged in as:  {{Auth::user()->name}} | <a href= {{ URL::to('logout') }}>Log out</a></span>
                    </li>

                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    </li>

                    @endauth
            @endif


              <!-- li class="nav-item">
                <a class="nav-link btn btn-warning text-light btn-sm" href= {{ URL::to('premium') }} >Premium</a>
              </li -->

            </ul>
        </nav>
      </header>
