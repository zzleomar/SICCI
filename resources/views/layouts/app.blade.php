<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SICCI') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link href="{{ asset('css/personales.css') }}" rel="stylesheet">

</head>
<body>
    <header class="header sticky-top fondo-header"> 
        @include('partials.navbar')
                
    </header>
        @yield('content')
    <footer class="footer py-2">
        <p class="text-center text-muted">&copy;2018 <a href="{{ URL::to('/')}}">SICCI</a> - Gobernación del Estado Sucre</p>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/personal.js') }}"></script>
    @yield('scripts')
</body>
</html>
