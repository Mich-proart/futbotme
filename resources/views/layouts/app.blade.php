<!doctype html>

<html lang="es">

    <head>

        {{-- Metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Panel administración contenido"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"><!-- CSRF Token -->
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <title>Futbolme</title>

        <!-- App css -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/icons.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets_admin/css/app-creative.min.css') }}" type="text/css">

        <!-- Fonts -->
        {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

        <!-- Scripts -->
        {{-- ESTA LINEA DE AQUI ABAJO LA COMENTE PERO NO SE PARA QUE SIRVE HAY QUE INVESTIGAR --}}
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
        
    </head>

    <body class="loading" data-layout-color="light" data-layout="topnav" data-layout-mode="fluid" data-rightbar-onstart="true">
        <div id="app">

            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

                <div class="container">

                    <a class="navbar-brand" href="{{ url('/') }}">Futbolme</a>

                    {{-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Futbolme') }}</a> --}}

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav me-auto"></ul><!-- Left Side Of Navbar -->

                        <ul class="navbar-nav ms-auto"><!-- Right Side Of Navbar -->
                            
                            @guest <!-- Authentication Links -->

                                @if (Route::has('login'))

                                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>

                                @endif

                                @if (Route::has('register'))

                                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>

                                @endif

                            @else

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>
                                
                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown"><a href="" class="nav-link">uno</a></li>

                                <li class="nav-item dropdown">

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            
                                            @csrf

                                        </form>

                                    </div>

                                </li>

                            @endguest

                        </ul>

                    </div>

                </div>

            </nav>

            <main class="py-4">

                @yield('content')

            </main>

        </div>
        <!-- bundle -->
        <script src="{{ asset('assets_admin/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets_admin/js/app.min.js') }}"></script>


        <!-- third party js -->
        <script src="{{ asset('assets_admin/js/vendor/chart.min.js') }}"></script>

        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('assets_admin/js/pages/demo.dashboard-projects.js') }}"></script>
        <!-- end demo js-->
    </body>

</html>
