<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      @yield('head')
  </head>
  <body>
    @yield('gallery')
    <main role ="main" class="bd-content">
    @yield('body')
  </main>

@yield('footer')
  </body>
</html>
