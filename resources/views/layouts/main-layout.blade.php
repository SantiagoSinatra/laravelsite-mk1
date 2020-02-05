<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"> {{-- 300, 400, 700 --}}
    <link rel="stylesheet" href="{{ asset('css/main-layout-css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-layout-css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-layout-css/footer.css') }}">

    @stack('css')

    <title>@yield('pageTitle')</title>
</head>
<body>

    {{-- El yeld es para incorporar las @section que vienen en la vista que cargue. El include es para incluir codigo de otra carpeta osea tengo que poner la ruta y todo. --}}
    @include('partials.header') {{-- Me traigo el header desde la carpeta partials --}}

    <div class="content-container">
        @yield('content') {{-- Incluyo lo que viene en la section 'content' de la vista que mando, en este lugar --}}
    </div>

    @include('partials.footer') {{-- Me traigo el footer desde la carpeta partials --}}

</body>
</html>
