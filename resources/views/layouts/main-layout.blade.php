<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-dc-comics</title>
    @yield('head')
    @vite('resources/js/app.js')
</head>
<body>
    @include('components.header')
    @include('components.footer')
    @yield('content')
    @include('components.errors')
    

    
</body>
</html>