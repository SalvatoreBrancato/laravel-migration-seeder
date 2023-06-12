<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>
<body>
    <nav>
        @include('partials.header')
    </nav>
    <main>
        @yield('trains')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>