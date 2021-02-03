<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./assets/img/favicon.ico" />
        <link
          rel="apple-touch-icon"
          sizes="76x76"
          href="./assets/img/apple-icon.png"
        />
        <title>Hospital</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        @yield('head')
    </head>
    <body class="text-gray-800 antialiased">
        @include('layouts.partials.nav')
        <div>
            @yield('content')
        </div>
        @include('layouts.partials.footer')
         @yield('footer')
    </body>
    <script>
        function toggleNavbar(collapseID) {
          document.getElementById(collapseID).classList.toggle("hidden");
          document.getElementById(collapseID).classList.toggle("block");
        }
      </script>
</html>