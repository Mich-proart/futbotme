<x-layouts.app title="Home" meta-description="Home page">

    <section>
        <div class="container-fluid pt-lg-5 pt-3">
            <div class="row row-cols-2 align-items-end justify-content-between">
                <div class="col-12">
                    {{ $directos }}
                    {{-- @foreach ($datos as $leagueId => $partidosPorLiga)
                        <h3>Competicion ID: {{ $leagueId }}</h3>
                        @foreach ($partidosPorLiga as $partido)
                            <div>
                                <h4>Partido ID: {{ $partido['id'] }}</h4>
                                @if (isset($partido['league']))
                                    <p>Liga: {{ $partido['league']['name'] }}</p>
                                @else
                                    <p>Liga no disponible</p>
                                @endif
                                <p>Local: {{ $partido['home']['name'] }}</p>
                                <p>Visitante: {{ $partido['away']['name'] }}</p>
                                <!-- ... (otros datos que quieras mostrar) -->
                            </div>
                        @endforeach
                    @endforeach --}}
                </div>
                <h4 class="px-0 fs-000 mb-1 text-lg-end color-gray-medium d-lg-none d-block">Actualizado: 16:45:52 </h4>
                <div class="col-lg col-12 ">
                    <div class="container">
                        <div class="calendar-assets">
                            <button class="btn bth-hoy" onclick="resetDate()" title="Dia atual">
                                <i class="fas fa-calendar-day"></i> Hoy
                            </button>

                            <div class="day-assets d-flex align-items-center justify-content-between">
                                <button
                                    class="btn bg-gray br-0 px-4 py-2 d-flex align-items-center justify-content-between"
                                    onclick="prevDay()" title="Dia anterior">
                                    <i class=" bi bi-chevron-left fs-5"></i>
                                </button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="fs-00 mb-0" id="currentDate"></h2>
                                    <div class="field ps-2">
                                        <form class="form-input" id="date-search" onsubmit="return setDate(this)">
                                            <input type="date" class="text-field w-15" name="date" id="date"
                                                required>
                                            {{-- <button type="submit" class="btn btn-small"
                                                title="Pesquisar"><i class="bi bi-search"></i></button> --}}
                                        </form>
                                    </div>
                                </div>
                                <button
                                    class="btn bg-gray br-0 px-4 py-2 d-flex align-items-center justify-content-between"
                                    onclick="nextDay()" title="Próximo dia">
                                    <i class=" bi bi-chevron-right fs-5"></i>
                                </button>
                            </div>
                        </div>
                        <div class="calendar d-none" id="table">
                            <div class="header">
                                <div class="month" id="month-header">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-12 mt-lg-0 mt-4 px-lg-3 px-0">
                    <h4 class="fs-000 mb-1 text-lg-end color-gray-medium d-lg-block d-none">Actualizado: 16:45:52 </h4>
                    <h2 class="fs-00  mb-0 text-lg-end fw-semibold color-black">Partidos para hoy: <span
                            class="pratidos_totales_dia">30</span> | <span class="color-feature ">En directo: 8</span>
                    </h2>
                </div>

                <div
                    class="col-12 mt-4 mb-2 d-flex flex-wrap alig-items-center justify-content-center p-3 bg-green-live rounded-2">
                    <button type="button"
                        class="btn px-3 py-2 bg-brand-green fw-semibold text-white fs-00 me-3 mb-lg-0 mb-3">
                        Principal <span class="badge bg-feature va-middle fs-000">4</span>
                    </button>
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-green-directo fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        3ª Federación <span class="badge bg-feature va-middle fs-000">1</span>
                    </button>
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-green-directo fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        Autonómicas <span class="badge bg-feature va-middle fs-000">3</span>
                    </button>
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-green-directo fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        Juveniles <span class="badge bg-feature va-middle fs-000">2</span>
                    </button>
                    <button type="button" class="btn px-3 py-2 color-black bg-green-directo fw-semibold fs-00">
                        Europa <span class="badge bg-feature va-middle fs-000">4</span>
                    </button>
                </div>
                <div class="col px-0 mb-lg-0 mb-2">
                    <h2 class="fs-03 fw-bold color-livescore mb-0">LIVESCORE</h2>
                </div>
                <div class="col px-0 text-end mb-lg-0 mb-2">
                    <button class="ms-auto btn-vocultos bg-silver-medium border-0 color-black fs-00">
                        <span class="icon-hidden d-inline-block fs-3 me-3"></span>
                        <span class="d-block">Ver ocultos(0)</span>
                    </button>
                </div>
            </div>
        </div>
        {{-- Partidos!! --}}
        <div class="container-fluid px-0 my-2">
            {{-- LIVESCORE --}}
            <div class="accordion" id="PartidosEnDirecto">
                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between text-white"
                        id="panelsStayOpen-headingOne">

                        <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                            <div class="d-block ps-4">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>

                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                    alt="bandera del pais del torneo" class="rounded-circle">
                            </div>

                            <a href="#" class="d-inline-block fs-01 nombre_torneo_liga">Copa de S.M el Rey
                                <span>-</span> RFEF</a>
                        </div>

                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body border-bottom">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg-red-minutos text-white">74’</span>
                                    </div>

                                </div>

                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    <span class="icon-alienacion d-inline-block fs-1"></span>
                                    <span class="icon-ball d-inline-block fs-1"></span>
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="mx-0 partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid"></div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"></div>
                                    <h3 class="d-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between text-white"
                        id="panelsStayOpen-headingTwo">

                        <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                            <div class="d-block ps-4">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>

                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                    alt="bandera del pais del torneo" class="rounded-circle">
                            </div>

                            <a href="#" class="d-inline-block fs-01 nombre_torneo_liga">Copa de S.M el Rey
                                <span>-</span> RFEF</a>
                        </div>
                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                            aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body border-bottom">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg-green-minutos text-white">10’</span>
                                    </div>

                                </div>

                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    <span class="icon-alienacion d-inline-block fs-1"></span>
                                    <span class="icon-ball d-inline-block fs-1"></span>
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid"></div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"></div>
                                    <h3 class="d-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelsStayOpen-headingtree">

                        <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                            <div class="d-block ps-4">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>

                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                    alt="bandera del pais del torneo" class="rounded-circle">
                            </div>

                            <a href="#" class="d-inline-block fs-01 nombre_torneo_liga">Copa de S.M el Rey
                                <span>-</span> RFEF </a>
                        </div>

                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetree"
                            aria-expanded="true" aria-controls="panelsStayOpen-collapsetree">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsetree" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingtree">
                        <div class="accordion-body border-bottom">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg-green-minutos text-white">10’</span>
                                    </div>

                                </div>

                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    <span class="icon-alienacion d-inline-block fs-1"></span>
                                    <span class="icon-ball d-inline-block fs-1"></span>
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid"></div>
                                    <div class="goleadores">
                                        <span class="d-block">0-1, Amath - 21´</span>
                                        <span class="d-block">0-2, Joan - 30´</span>
                                        <span class="d-block">1-3, Ronaldo - 55´</span>
                                    </div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"></div>
                                    <h3 class="d-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            {{-- PUBLI --}}
            <div class="row my-4">
                <div class="col-12">
                    <div class="publi4"></div>
                </div>
            </div>

            {{-- FUTUROS Y FINALIZADOS --}}

            <div class="accordion" id="PartidosFuturos">
                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelFuturosOpen-headingOne">

                        <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                            <div class="d-block ps-4">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>

                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                    alt="bandera del pais del torneo" class="rounded-circle">
                            </div>

                            <a href="#" class="d-inline-block fs-01 nombre_torneo_liga">Copa de S.M el Rey
                                <span>-</span> RFEF</a>
                        </div>

                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelFuturosOpen-collapseOne"
                            aria-expanded="true" aria-controls="panelFuturosOpen-collapseOne">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelFuturosOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelFuturosOpen-headingOne">

                        <div class="accordion-body border-bottom partido_futuro">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">17:30</span>
                                    </div>

                                </div>
                                <div class="col"><span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada
                                        30</span></div>
                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    {{-- <span class="icon-alienacion d-inline-block fs-1"></span>
                                    <span class="icon-ball d-inline-block fs-1"></span> --}}
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid"></div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local">-</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">-</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"></div>
                                    <h3 class="d-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>

                        <div class="accordion-body border-bottom partido_futuro">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">17:30</span>
                                    </div>

                                </div>
                                <div class="col"><span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada
                                        30</span></div>
                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    {{-- <span class="icon-alienacion d-inline-block fs-1"></span>
                                    <span class="icon-ball d-inline-block fs-1"></span> --}}
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none">
                                        <img src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid">
                                    </div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local">-</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">-</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none">
                                        <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>

                        <div class="accordion-body border-bottom partido_finalizado">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">17:30</span>
                                    </div>

                                </div>
                                <div class="col"><span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada
                                        30</span></div>
                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    <span class="icon-alienacion d-inline-block fs-1"></span>
                                    <span class="icon-ball d-inline-block fs-1"></span>
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid"></div>
                                    <div class="goleadores">
                                        <span class="d-block">0-1, Amath - 21´</span>
                                        <span class="d-block">0-2, Joan - 30´</span>
                                        <span class="d-block">1-3, Ronaldo - 55´</span>
                                    </div>
                                </div>

                                <div class="marcador ">
                                    <span class="goles-local">10</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">16</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"></div>
                                    <h3 class="d-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

</x-layouts.app>
