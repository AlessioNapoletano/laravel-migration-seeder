<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="https://pbs.twimg.com/profile_images/1169226490757689345/WH7l5A_i_400x400.jpg">
    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <header class="d-flex align-items-center ps-2">
        @include('partials.header')
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>