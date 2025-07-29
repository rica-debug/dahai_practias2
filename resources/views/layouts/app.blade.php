<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dahai Solar')</title>

    <!-- CSS común -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    
    <!-- Estilos específicos por página -->
    @stack('styles')
</head>
<body>
    <!-- HEADER -->
    @include('partials.header')

    <!-- CONTENIDO PRINCIPAL -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('partials.footer')

    <!-- JS común -->
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    
    <!-- Scripts específicos por página -->
    @stack('scripts')
</body>
</html>