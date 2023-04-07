<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>futbolme - {{ $title ?? 'Titulo Web' }}</title>

        <meta name="description" content="{{ $metaDescription }}">

        {{-- css files --}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-vars.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-colors.css') }}">

        {{-- css files existent to futbolme --}}
        <link rel="stylesheet" href="{{ asset('assets/css/paises.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/paises.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/comunidades.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/comunidades.min.css') }}">

        {{-- js files --}}
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/js/general.js') }}"></script>

    </head>

    <body>        

        {{-- navbar --}}
        <x-layouts.navigation />              
        
        {{-- contenido principal del documento --}}
        {{ $slot }}

        {{-- footer --}}
        <x-layouts.footer />

    </body>

</html>