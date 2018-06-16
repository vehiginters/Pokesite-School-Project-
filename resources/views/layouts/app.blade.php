<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Custom Pokemon</title>
      <link rel="stylesheet" href="/css/app.css">
  </head>
  <body >
    @include('inc.navbar')
      <div class="row">
        <div class="col-lg-3">
            <img src="/img/right.jpg" />
        </div>
        <div class="col-lg-6">
          @yield('content')
        </div>
        <div class="col-lg-3">
          <img src="/img/left.jpg" />
        </div>
      </div>
  </body>
</html>
