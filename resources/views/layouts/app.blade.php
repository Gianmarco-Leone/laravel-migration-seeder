<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{env('APP_NAME')}} - @yield('page_name')</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>

  <header>
    @include('partials._navbar')
  </header>

  <main>
    <h1 class="text-center my-5">@yield('page_title')</h1>
    @yield('main_content')
  </main>
</body>

</html>