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
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link {{Request::is('login') ? 'active' : ''}}" href="/login" style="color:#76a4ed">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('register') ? 'active' : ''}}" href="/register" style="color:#76a4ed">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
