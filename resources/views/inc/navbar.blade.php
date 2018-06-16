<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" style="color: red;">The Custom Pokedex <img src="/img/pokeball.jpg" width="23" height="23" alt="pokeball"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/" style="color: white;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('custom') ? 'active' : ''}}" href="/custom" style="color: white;">Custom Pokemon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('submit') ? 'active' : ''}}" href="/submit" style="color: white;">Submit your own</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/submissions" style="color: white;">Your Submissions <span class="sr-only">(current)</span></a>
            </li>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
            <li class="nav-item">
              <a class="nav-link {{Request::is('login') ? 'active' : ''}}" href="/login" style="color:#76a4ed;">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('register') ? 'active' : ''}}" href="/register" style="color:#76a4ed;">Register</a>
            </li>
            @endif
            @if(Auth::check())
            <li >
                <p class="mt-2" style="color: white;"> Hello there , {{Auth::user()->name}}</p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout "style="color:#76a4ed;">Logout</a>
            </li>
            @endif
          </ul>
        </div>
      </nav>
    </header>
