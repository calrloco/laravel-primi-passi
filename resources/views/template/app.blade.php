<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titolo')</title>
</head>


<body>
    @include('partials.header')
    <div class="container-flex">
        <main>
            @yield('main')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
