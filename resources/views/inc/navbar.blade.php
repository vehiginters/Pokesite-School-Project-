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
              <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/" style="color: white;">{{trans('navbar.home')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('custom') ? 'active' : ''}}" href="/custom" style="color: white;">{{trans('navbar.custom')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('submit') ? 'active' : ''}}" href="/submit" style="color: white;">{{trans('navbar.submit')}}</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/submissions" style="color: white;">{{trans('navbar.submissions')}}<span class="sr-only">(current)</span></a>
            </li>
            @endif
            @if(App::isLocale('lv'))
            <a class="navbar-brand ml-4"  href={{url('lang/en')}}> EN <img src="/img/us.png" width="23" height="23" alt="pokeball"></a>
            @endif
            @if(App::isLocale('en'))
            <a class="navbar-brand ml-4"  href={{url('lang/lv')}}> LV <img src="/img/lv.png" width="23" height="23" alt="pokeball"></a>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
            <li class="nav-item">
              <a class="nav-link {{Request::is('login') ? 'active' : ''}}" href="/login" style="color:#76a4ed;">{{trans('navbar.login')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('register') ? 'active' : ''}}" href="/register" style="color:#76a4ed;">{{trans('navbar.register')}}</a>
            </li>
            @endif
            @if(Auth::check())
            <li >
                <p class="mt-2" style="color: white;"> {{trans('navbar.hey')}} , {{Auth::user()->name}}</p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout "style="color:#76a4ed;">{{trans('navbar.logout')}}</a>
            </li>
            @endif
          </ul>
        </div>
      </nav>
    </header>
