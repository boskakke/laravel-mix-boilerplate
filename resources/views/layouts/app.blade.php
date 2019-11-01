<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body>

    <div class="wrap " role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
    </div>
  </body>
</html>