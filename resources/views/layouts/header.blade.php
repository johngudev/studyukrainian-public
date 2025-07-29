

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

      <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand navbar-light fixed-top text-center bg-white d-none d-sm-flex">
          <a class="navbar-brand" href={{ URL::to('') }}>

            <img class="logo 	d-none d-sm-inline" src="/img/logo-3.png"></img>
            <img class="logo d-sm-none nav-link" src="/img/logo-3-sm.png"></img>
          </a>
            <ul class="navbar-nav navbar-right  ml-auto">

              <li class="nav-item">
                <a class="nav-link" href={{ URL::to('news-articles') }} >News Articles</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href={{ URL::to('topical-lessons') }} >Lessons</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href={{ URL::to('lessons') }} >Dialogues</a>
              </li>

              <!-- Add grammar -->
              <!-- <li class="nav-item">
                <a class="nav-link" href={{ URL::to('grammar') }} >Grammar</a>
              </li> -->

              <!-- <li class="nav-item">
                <a class="nav-link" href= {{ URL::to('about') }} >About</a>
              </li> -->

              <!-- <li class="nav-item">
                <a class="nav-link" href="/blogs" >Blog</a>
              </li> -->

              @if(Route::has('login'))
                    @auth

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                      <div class="dropdown-menu" style="margin-left:-5rem;" >
                        <a class="nav-link" href='/dashboard'>Dashboard</a>
                        <a class="nav-link" href='/flashcard-studying'>Manage Flashcards</a>
                        <a class="nav-link" href='/study-record/test'>Study Flashcards</a>

                        <a class="nav-link" href='/logout'>Logout</a>

                      </div>
                    </li>

                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                    </li>

                    @endauth
            @endif

              <!--li class="nav-item">
                <a class="nav-link btn btn-warning text-light btn-sm" href= {{ URL::to('premium') }} >Premium</a>
              </li -->


            </ul>
          </div>
        </nav>

        <!-- Mobile navbar -->
        <nav class="navbar navbar-expand navbar-light fixed-top text-center bg-white d-sm-none">
          <a class="navbar-brand" href={{ URL::to('') }}>

            <img class="logo 	d-none d-sm-inline" src="/img/logo-3.png"></img>
            <img class="logo d-sm-none nav-link" src="/img/logo-3-sm.png"></img>
          </a>

          <ul class="navbar-nav navbar-right  ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
              <div class="dropdown-menu" style="margin-left:-5rem;">
                <a class="nav-link" href={{ URL::to('news-articles') }} >News Articles</a>
                <a class="nav-link" href={{ URL::to('topical-lessons') }} >Lessons</a>
                <a class="nav-link" href={{ URL::to('lessons') }} >Dialogues</a>
                <!-- <a class="nav-link" href={{ URL::to('grammar') }} >Grammar</a> -->
                <!-- <a class="nav-link" href= {{ URL::to('about') }} >About</a> -->

                <div class="dropdown-divider"></div>

                @if(Route::has('login'))
                    @auth

                      <a class="nav-link" href="/dashboard">Dashboard</a>
                      <a class="nav-link" href='/flashcard-studying'>Manage Flashcards</a>
                      <a class="nav-link" href='/study-record/test'>Study Flashcards</a>

                      <a class="nav-link" href="/logout">Logout</a>

                    @else
                      <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    @endauth
                @endif  

              </div>
            </li>
          </ul>

          </div>
        </nav>

        
      </header>
