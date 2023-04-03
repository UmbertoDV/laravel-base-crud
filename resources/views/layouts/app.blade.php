<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> {{ env('APP_NAME')}} - @yield('page-name') </title>
  @vite('resources/js/app.js')
</head>
<body>
  <header>
    @include('partials._header')
  </header>
  <main>
    @yield('main')
  </main>
  <footer>
    @include('partials._footer')
  </footer>
</body>
</html>