{{-- overla menu mobile --}}
<div class="bg-overlay-menu" style="display:none;"></div>

{{-- publicidad escrita top bar --}}
<div class="content-top-nav-bar py-3 bg-dark-green">

    <h1 class="text-top-nav-bar mb-0 color-white text-center fs-00">Fútbol en directo, livescore - resultados de partidos
        de fútbol</h1>

</div>

<div class="publicidad-header bg-dark-green remove-mobile">
    <div class="container-fluid-custom pb-lg-5 pb-3">
        <div class="content-publi d-flex align-items-center justify-content-center"
            style="height: 88px;background-color:#827C6E;">
            <p class="mb-0 text-white">Publicidad Banner 1320x88px <-- update <span class="update-un-minuto">000</span>
                    --></p>
        </div>
    </div>
</div>

{{-- content header --}}
<header class="navBar bg-brand-green">

    <div
        class="container-fluid-custom d-flex align-items-center justify-content-between py-lg-4 py-4 position-relative">

        {{-- icono buscador --}}
        <div class="content-buscador cursor-pointer remove-desktop">

            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10.1369 5.69469C10.1369 8.20268 8.1038 10.2358 5.59581 10.2358C3.08782 10.2358 1.05469 8.20268 1.05469 5.69469C1.05469 3.18669 3.08782 1.15356 5.59581 1.15356C8.1038 1.15356 10.1369 3.18669 10.1369 5.69469ZM9.14437 9.95066C8.18311 10.753 6.94584 11.2358 5.59581 11.2358C2.53553 11.2358 0.0546875 8.75497 0.0546875 5.69469C0.0546875 2.63441 2.53553 0.153564 5.59581 0.153564C8.65609 0.153564 11.1369 2.63441 11.1369 5.69469C11.1369 7.04487 10.654 8.28227 9.85151 9.24358L13.7993 13.1913C13.9945 13.3866 13.9945 13.7032 13.7993 13.8984C13.604 14.0937 13.2874 14.0937 13.0922 13.8984L9.14437 9.95066Z"
                    fill="white" />

            </svg>

        </div>

        {{-- buscador mobile menu --}}
        <div style="display:none;"
            class="content-input-buscador content-input-buscador-mobile position-absolute remove-desktop py-4 container-fluid-custom bg-silver">

            <div class="d-flex align-items-center">

                <input class="w-100 py-2 px-4 border-0 input-text-buscador" type="text" placeholder="Buscar Equipo o Jugador">

                <div class="content-icon-buscador content-icon-buscador-mobile d-flex align-items-center justify-content-center cursor-pointer"
                    style="background: var(--color-white);">

                    <svg width="32" height="34" viewBox="0 0 32 32"
                        style="background: var(--color-white);opacity: .7;" fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.1034 15.0517C19.1034 17.0133 17.5133 18.6034 15.5517 18.6034C13.5902 18.6034 12 17.0133 12 15.0517C12 13.0902 13.5902 11.5 15.5517 11.5C17.5133 11.5 19.1034 13.0902 19.1034 15.0517ZM18.3972 18.6046C17.6179 19.2296 16.6285 19.6034 15.5517 19.6034C13.0379 19.6034 11 17.5656 11 15.0517C11 12.5379 13.0379 10.5 15.5517 10.5C18.0656 10.5 20.1034 12.5379 20.1034 15.0517C20.1034 16.1286 19.7295 17.1181 19.1044 17.8975L22.3535 21.1467C22.5488 21.3419 22.5488 21.6585 22.3535 21.8538C22.1583 22.049 21.8417 22.049 21.6464 21.8538L18.3972 18.6046Z"
                            fill="black" />

                    </svg>

                </div>

            </div>

        </div>

        <div class="div-resultados-mobile bg-silver remove-desktop" style="display:none;">

            <ul class="list-unstyled listado-result-equipos-jugadores">

                <li>

                    <div class="card mb-3" style="max-width: 540px;">

                        <div class="row g-0">

                            <div class="col-md-4 d-flex align-items-center justify-content-center">

                                <img src="https://futbolme.com/static/img/club/escudo4466.png" class="img-fluid rounded-start" alt="...">

                            </div>

                            <div class="col-md-8">

                                <div class="card-body">

                                    <h3 class="card-title titulo-equ-text">Card title</h3>

                                    <p class="card-text categoria-equ-text">Senior Masculino</p>

                                    <p class="card-text localidad-equ-text">Localidad</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

            </ul>

        </div>  

        {{-- logo web --}}
        <div class="content-logo">

            <a href="{{ url('/') }}" class="h-100 w-100">

                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo color blanco futbolme">

            </a>

        </div>

        {{-- menu enlaces estaticos mas buscador mostrado desktop y remove en mobile --}}
        <div class="content-enlaces-static desktop remove-mobile">

            <ul class="list-unstyled mb-0 d-flex align-items-center">

                <li>

                    <div class="d-flex align-items-center">

                        <div class="svg-content">

                            <span class="icon-TV pe-3 text-white d-block fs-2"></span>

                        </div>

                        <p class="mb-0 color-white"><a href="{{ url('/partidos') }}"
                                class="enlace-unstyle color-white fs-00">Partidos Televisados</a></p>

                    </div>

                </li>

                <li>

                    <div class="d-flex align-items-center mx-5">

                        <div class="svg-content">

                            <span class="icon-ascensos pe-3 text-white d-block"></span>

                        </div>

                        <p class="mb-0 color-white"><a href="{{ url('/ascensos-y-descensos/nacional') }}"
                                class="enlace-unstyle color-white fs-00">Ascensos y descensos</a></p>

                    </div>

                </li>

                <li>

                    <div class="d-flex align-items-center me-5">

                        <div class="svg-content">

                            <span class="icon-ball pe-3 text-white d-block"></span>

                        </div>

                        <p class="mb-0 color-white"><a href="{{ url('/gol-average') }}"
                                class="enlace-unstyle color-white fs-00">Calcular Gol Average</a></p>

                    </div>

                </li>

                <li>

                    <div class="content-input-buscador">

                        <div class="d-flex align-items-center justify-content-center bg-whitte">

                            <input class="w-100 py-2 px-3 input-generic border-0 input-text-buscador" type="text"
                                placeholder="Buscar Equipo o Jugador">

                            <div class="content-icon-buscador d-flex align-items-center justify-content-center cursor-pointer bg-whitte">

                                <span class="icon-search d-block text-opacity-75 p-2"></span>

                            </div>

                            <div class="content-resultado-buscador py-4">
                                <div class="numero-resultados d-flex align-items-center justcontent-start mb-4">
                                    <p class="mb-0 px-4 py-2"><span class="num-rest-equipos">0</span> equipos</p>
                                    <p class="mb-0 px-4 py-2"><span class="num-rest-jugadores">0</span> jugadores</p>
                                </div>
                                <ul class="list-unstyled listado-result-equipos-jugadores">
                                    <li>
                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div
                                                    class="col-md-4 d-flex align-items-center justify-content-center ps-3">
                                                    <img src="https://futbolme.com/static/img/club/escudo4466.png"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h3 class="card-title titulo-equ-text">Card title</h3>
                                                        <p class="card-text categoria-equ-text">Senior Masculino</p>
                                                        <p class="card-text localidad-equ-text">Localidad</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </li>

            </ul>

        </div>

        {{-- hamburguesa desplegable menu --}}
        <div class="content-icon-menu cursor-pointer remove-desktop">

            <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0.743652 1.15964C0.743652 0.62409 1.1778 0.189941 1.71335 0.189941H18.2867C18.8222 0.189941 19.2563 0.62409 19.2563 1.15964C19.2563 1.69519 18.8222 2.12933 18.2867 2.12933H1.71335C1.1778 2.12933 0.743652 1.69519 0.743652 1.15964ZM0.743652 7.09903C0.743652 6.56348 1.1778 6.12933 1.71335 6.12933H18.2867C18.8222 6.12933 19.2563 6.56348 19.2563 7.09903C19.2563 7.63458 18.8222 8.06873 18.2867 8.06873H1.71335C1.1778 8.06873 0.743652 7.63458 0.743652 7.09903ZM19.2563 13.0384C19.2563 12.5029 18.8222 12.0687 18.2867 12.0687H1.71335C1.1778 12.0687 0.743652 12.5029 0.743652 13.0384C0.743652 13.574 1.1778 14.0081 1.71335 14.0081H18.2867C18.8222 14.0081 19.2563 13.574 19.2563 13.0384Z"
                    fill="white" />

            </svg>

        </div>

    </div>

</header>
