

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

      <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand navbar-light d-sm-flex d-none">

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



              @if(Route::has('login'))
                    @auth

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                      <div class="dropdown-menu" style="margin-left:-5rem;">
                        <a class="nav-link" href='/dashboard'>Dashboard</a>
                        <a class="nav-link" href='/logout'>Logout</a>

                      </div>
                    </li>


                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                    </li>

                    @endauth
            @endif


              <!-- li class="nav-item">
                <a class="nav-link btn btn-warning text-light btn-sm" href= {{ URL::to('premium') }} >Premium</a>
              </li -->

            </ul>
        </nav>

        <!-- Mobile navbar -->
        <nav class="navbar navbar-expand navbar-light d-sm-none">
        <ul class="navbar-nav navbar-right  ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
              <div class="dropdown-menu" style="margin-left: -5rem;">
                <a class="nav-link" href={{ URL::to('lessons') }} >Lessons</a>
                <a class="nav-link" href={{ URL::to('grammar') }} >Grammar</a>
                <a class="nav-link" href= {{ URL::to('about') }} >About</a>

                <div class="dropdown-divider"></div>

                @if(Route::has('login'))
                    @auth

                      <a class="nav-link" href="/dashboard">Dashboard</a>
                      <a class="nav-link" href="/logout">Logout</a>

                    @else
                      <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    @endauth
                @endif  

              </div>
            </li>
          </ul>
        </nav>
      </header>

<script>
  $('.dropdown-toggle').dropdown();
</script>
