<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <div class="container my-5">
        @yield('content')
    </div>
</body>
</html>
