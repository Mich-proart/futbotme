<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>futbolme - {{ $title ?? 'Titulo Web' }}</title>
        <meta name="description" content="{{ $metaDescription }}">
    </head>
    <body>        

        {{-- navbar --}}
        <x-layouts.navigation />
        
        {{-- contenido principal del documento --}}
        {{ $slot }}

    </body>
</html>