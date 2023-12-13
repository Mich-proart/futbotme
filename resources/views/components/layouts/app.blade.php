<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>futbolme - {{ $title ?? 'Titulo Web' }}</title>

    <meta name="description" content="{{ $metaDescription }}">

    {{-- css files --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-vars.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-icon.css') }}">

    {{-- css files existent to futbolme --}}
    <link rel="stylesheet" href="{{ asset('assets/css/paises.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/paises.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/comunidades.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/comunidades.min.css') }}">

    {{-- js files --}}
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/general.js') }}"></script>
    <script src="{{ asset('assets/js/apiBetsapi.js') }}"></script>
    <script src="{{ asset('assets/js/customVars.js') }}"></script>
    <script src="{{ asset('assets/js/buscador.js') }}"></script>
    <script src="https://tags.refinery89.com/futbolmeeu.js" async></script>
</head>

<body>

    {{-- navbar --}}
    <x-layouts.navigation />

    <section class="bg-white-light">
        <div class="container-fluid container-fluid-custom">
            <div class="row">
                <div class="col-lg-3 col-12 mb-lg-0 mb-4">
                    <div class="content-navbar">
                        @include('components.menuphp')
                    </div>
                    <div class="content-publi-left mt-5 d-lg-block d-none">
                        {{-- <div class="publi2"></div> --}}
                        {{-- <img src="{{ asset('assets/images/test_publi2.png') }}" alt="test_publi" class="img-fluid"> --}}
                        @if ($agent->isMobile())
                            <!-- Contenido específico para dispositivos móviles -->
                        @else
                            <!-- Contenido para otros dispositivos (no móviles) -->
                            <script src="https://emea.hhkld.com/tag/load-107393.js" async  charset="UTF-8" ></script>
                        @endif

                    </div>
                </div>

                <div class="col-lg-7 col-12 px-lg-4">
                    {{-- contenido principal del documento --}}
                    {{ $slot }}
                </div>

                <div class="col-lg-2 col-12 pt-5">
                    {{-- <div class="publi3">
                            <div class="invisible">
                                publicidad publicidad publicidad publicidad publicidad publicidad
                            </div>
                        </div> --}}
                    {{-- <img src="{{ asset('assets/images/test_publi3.png') }}" alt="test_publi" class="img-fluid"> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <x-layouts.footer />

</body>

</html>
