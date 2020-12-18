<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navigation')
    <div class="d1">
        @yield('header')
    </div>
    <div class="d3">
        @yield('img2')
    </div>
    <div class="d5">
        @yield('img2')
    </div>
    <div class="d2">
        @yield('content')
    </div>
    <div class="d4">
        @yield('content2')
    </div>
    <div class="container mt-4">
        <div class="row">
            @yield('main')
            @yield('sidebar')
        </div>
    </div>
    
</body>
</html>
