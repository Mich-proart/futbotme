{{-- <div class="bg-overlay-menu"></div> --}}

<div class="content-top-nav-bar py-3 bg-dark-green">

    <h1 class="text-top-nav-bar mb-0 color-white text-center fs-01">Fútbol en directo, livescore - resultados de partidos de fútbol</h1>

</div>

<header class="navBar container-fluid bg-brand-green py-4">

    <div class="d-flex align-items-center justify-content-between">

        <div class="content-buscador cursor-pointer">

            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1369 5.69469C10.1369 8.20268 8.1038 10.2358 5.59581 10.2358C3.08782 10.2358 1.05469 8.20268 1.05469 5.69469C1.05469 3.18669 3.08782 1.15356 5.59581 1.15356C8.1038 1.15356 10.1369 3.18669 10.1369 5.69469ZM9.14437 9.95066C8.18311 10.753 6.94584 11.2358 5.59581 11.2358C2.53553 11.2358 0.0546875 8.75497 0.0546875 5.69469C0.0546875 2.63441 2.53553 0.153564 5.59581 0.153564C8.65609 0.153564 11.1369 2.63441 11.1369 5.69469C11.1369 7.04487 10.654 8.28227 9.85151 9.24358L13.7993 13.1913C13.9945 13.3866 13.9945 13.7032 13.7993 13.8984C13.604 14.0937 13.2874 14.0937 13.0922 13.8984L9.14437 9.95066Z" fill="white"/>
                
            </svg>            

        </div>

        <div class="content-logo">

            <a href="{{ url('/')}}" class="h-100 w-100">

                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo color blanco futbolme">

            </a>            

        </div>

        <div class="content-icon-menu cursor-pointer">

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.743652 1.15964C0.743652 0.62409 1.1778 0.189941 1.71335 0.189941H18.2867C18.8222 0.189941 19.2563 0.62409 19.2563 1.15964C19.2563 1.69519 18.8222 2.12933 18.2867 2.12933H1.71335C1.1778 2.12933 0.743652 1.69519 0.743652 1.15964ZM0.743652 7.09903C0.743652 6.56348 1.1778 6.12933 1.71335 6.12933H18.2867C18.8222 6.12933 19.2563 6.56348 19.2563 7.09903C19.2563 7.63458 18.8222 8.06873 18.2867 8.06873H1.71335C1.1778 8.06873 0.743652 7.63458 0.743652 7.09903ZM19.2563 13.0384C19.2563 12.5029 18.8222 12.0687 18.2867 12.0687H1.71335C1.1778 12.0687 0.743652 12.5029 0.743652 13.0384C0.743652 13.574 1.1778 14.0081 1.71335 14.0081H18.2867C18.8222 14.0081 19.2563 13.574 19.2563 13.0384Z" fill="white"/>

            </svg>
                
        </div>

    </div>

    {{-- <nav class="content-navbar flotante-menu-mobile bg-silver">

        <div class="content-top-bar-flotante text-end py-1 border-bottom-complet">

            <span class="px-2 cursor-pointer">X</span>

        </div>        

    </nav> --}}

    {{-- <nav class="content-navbar">

        @include('components.menuphp')   

    </nav> --}}

</header>