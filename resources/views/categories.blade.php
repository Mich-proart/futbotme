<x-layouts.app title="Categorias dinamicas" meta-description="Categorias page">



    <section class="header_cat px-lg-4 px-0 py-4 my-3">
        <div class="d-flex align-items-center mb-3">
            <div class="rounded-circle bandera_pais">
                <img src="https://flagcdn.com/es.svg" width="32" height="32" alt="bandera del pais del torneo"
                    class="rounded-circle">
            </div>
            <h1 class="color-brand-green text-uppercase ps-3 mb-0"> {{ $nombre }}</h1>
        </div>

        <p class="fs-000">La SEGUNDA FEDERACIÓN - Grupo 3, con 652 goles en 306 partidos, obtiene un coeficiente de 2.13
            goles por
            partido, que materializan 128 victorias locales, 100 empates y 78 victorias visitantes.</p>
    </section>
    <section>
        <ul class="nav nav-pills mb-3" id="pills_tab_cat" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3 active" id="pills-jornada-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-jornada" type="button" role="tab"
                    aria-controls="pills-jornada" aria-selected="true">Jornada</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3" id="pills-goleadores-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-goleadores" type="button" role="tab"
                    aria-controls="pills-goleadores" aria-selected="false">Goleadores</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3" id="pills-equipo-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-equipo" type="button" role="tab"
                    aria-controls="pills-equipo" aria-selected="false">Equipo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3" id="pills-calendario-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-calendario" type="button" role="tab"
                    aria-controls="pills-calendario" aria-selected="false">Calendario</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3" id="pills-fichajes-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-fichajes" type="button" role="tab"
                    aria-controls="pills-fichajes" aria-selected="false">Fichajes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3"
                    id="pills-ascensos-descensos-tab" data-bs-toggle="pill" data-bs-target="#pills-ascensos-descensos"
                    type="button" role="tab" aria-controls="pills-ascensos-descensos"
                    aria-selected="false">Ascensos y descensos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-lg-0 mb-3" id="pills-golaverage-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-golaverage" type="button" role="tab"
                    aria-controls="pills-golaverage" aria-selected="false">Calcular Golaverage</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            {{-- TAB JORNADA --}}
            <div class="tab-pane fade show active" id="pills-jornada" role="tabpanel"
                aria-labelledby="pills-jornada-tab">
                {{-- CAMBIAR DE JORNADA --}}
                <div class="wrapper">
                    <input type="number" id="jornada_actual" value="1" />
                    <span class="input-button jornada_actual_add"><i class="bi bi-chevron-up"></i></span>
                    <span class="input-button jornada_actual_remove"><i class="bi bi-chevron-down"></i></span>
                </div>
                {{-- JORNADAS --}}
                <div class="jornadas_categorias mt-3 mb-5">

                    {{-- EJEMPLOS OJO CON LAS CLASES DE LOS DIRECTOS, FUTUROS Y FINALIZADOS --}}
                    <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                        <div
                            class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                            <div class="local">
                                <h3 class="d-inline-block">Real Madrid</h3>
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                </div>
                            </div>

                            <div class="col-auto marcador px-lg-4 px-3">
                                <span class="goles-local">4</span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante">0</span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                </div>
                                <h3 class="d-inline-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div>


                    <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                        <div
                            class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                            <div class="local">
                                <h3 class="d-inline-block">Real Madrid</h3>
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                </div>
                            </div>

                            <div class="col-auto marcador px-lg-4 px-3">
                                <span class="goles-local">4</span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante">0</span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                </div>
                                <h3 class="d-inline-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div>

                    <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                        <div
                            class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                            <div class="local">
                                <h3 class="d-inline-block">Real Madrid</h3>
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                </div>
                            </div>

                            <div class="col-auto marcador px-lg-4 px-3">
                                <span class="goles-local">4</span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante">0</span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                </div>
                                <h3 class="d-inline-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div>

                    <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2">
                        <div class="d-flex aling-items-center justify-content-between partido_futuro">
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
                        <div
                            class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                            <div class="local">
                                <h3 class="d-inline-block">Real Madrid</h3>
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                            </div>

                            <div class="col-auto marcador px-lg-4 px-3">
                                <span class="goles-local">-</span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante">-</span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                <h3 class="d-inline-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div>

                    <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2">
                        <div class="d-flex aling-items-center justify-content-between partido_futuro">
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
                        <div
                            class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                            <div class="local">
                                <h3 class="d-inline-block">Real Madrid</h3>
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                            </div>

                            <div class="col-auto marcador px-lg-4 px-3">
                                <span class="goles-local">-</span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante">-</span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                <h3 class="d-inline-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div>

                    <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2 ">
                        <div class="d-flex aling-items-center justify-content-between partido_finalizado">
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
                        <div
                            class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                            <div class="local">
                                <h3 class="d-inline-block">Real Madrid</h3>
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                <div class="goleadores">
                                    <span class="d-block">0-1, Amath - 21´</span>
                                    <span class="d-block">0-2, Joan - 30´</span>
                                    <span class="d-block">1-3, Ronaldo - 55´</span>
                                </div>
                            </div>

                            <div class="col-auto marcador px-lg-4 px-3">
                                <span class="goles-local">10</span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante">16</span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                <h3 class="d-inline-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- CLASIFICACION --}}
                <div class="mb-2 d-flex flex-wrap alig-items-center rounded-2 mb-3">
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-white border fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        General
                    </button>
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-white border fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        Local
                    </button>
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-white border fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        Visitante
                    </button>
                    <button type="button"
                        class="btn px-3 py-2 color-black bg-white border fw-semibold fs-00 me-3 mb-lg-0 mb-3">
                        Últimas Jornadas <span class="badge bg-feature va-middle fs-000">2</span>
                    </button>
                </div>
                <div class="table-responsive">
                    <table id="latabla" class="table table-hover table-white border-light">
                        {{-- <caption>List of users</caption> --}}
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" title="Posición">
                                    <strong>P</strong>
                                </th>
                                <th scope="col" style="min-width: 190px" class="text-center">
                                    <strong>Equipo</strong>
                                </th>
                                <th scope="col" class="text-center" title="Puntos">
                                    <strong>Pts</strong>
                                </th>
                                <th scope="col" class="text-center" title="Jugados">
                                    Ju
                                </th>
                                <th scope="col" class="text-center" title="Ganados">
                                    Ga
                                </th>
                                <th scope="col" class="text-center" title="Empatados">
                                    Em
                                </th>
                                <th scope="col" class="text-center" title="Perdidos">
                                    Pe
                                </th>
                                <th scope="col" class="text-center" title="Goles a favor">
                                    Fv
                                </th>
                                <th scope="col" class="text-center" title="Goles en contra">
                                    Cn
                                </th>
                                <th scope="col" class="text-center" title="Diferencia de goles">
                                    Di
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="table-success">

                                <th scope="row" class="text-center">
                                    1
                                </th>

                                <td>
                                    <a href="https://futbolme.com/resultados-directo/equipo/escocia/11862/datos"
                                        class="text-decoration-none color-black">

                                        <img src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid">

                                        <strong>Real Madrid</strong>
                                    </a>
                                </td>

                                <td class="text-center puntos">15</td>
                                <td class="text-center jugados">5</td>
                                <td class="text-center ganados">5</td>
                                <td class="text-center empatados">0</td>
                                <td class="text-center perdidos">0</td>
                                <td class="text-center goles_favor">12</td>
                                <td class="text-center goles_contra">1</td>
                                <td class="text-center diferencia">11</td>

                            </tr>

                            <tr class="table-primary">

                                <th scope="row" class="text-center">
                                    2
                                </th>

                                <td>
                                    <a href="https://futbolme.com/resultados-directo/equipo/espana/11865/datos"
                                        class="text-decoration-none color-black">

                                        <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid">

                                        <strong>Barcelona</strong>
                                    </a>
                                </td>

                                <td class="text-center puntos">9</td>
                                <td class="text-center jugados">4</td>
                                <td class="text-center ganados">3</td>
                                <td class="text-center empatados">0</td>
                                <td class="text-center perdidos">1</td>
                                <td class="text-center goles_favor">16</td>
                                <td class="text-center goles_contra">3</td>
                                <td class="text-center diferencia">13</td>

                            </tr>

                            <tr class="">

                                <th scope="row" class="text-center">
                                    3
                                </th>

                                <td>
                                    <a href="https://futbolme.com/resultados-directo/equipo/noruega/11944/datos"
                                        class="text-decoration-none color-black">

                                        <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid">

                                        <strong>Girona</strong>
                                    </a>
                                </td>

                                <td class="text-center puntos">9</td>
                                <td class="text-center jugados">4</td>
                                <td class="text-center ganados">3</td>
                                <td class="text-center empatados">0</td>
                                <td class="text-center perdidos">1</td>
                                <td class="text-center goles_favor">16</td>
                                <td class="text-center goles_contra">3</td>
                                <td class="text-center diferencia">13</td>

                            </tr>


                            <tr class="">

                                <th scope="row" class="text-center">
                                    4
                                </th>

                                <td>
                                    <a href="https://futbolme.com/resultados-directo/equipo/georgia/11876/datos"
                                        class="text-decoration-none color-black">

                                        <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid">

                                        <strong>Betis</strong>
                                    </a>
                                </td>

                                <td class="text-center puntos">4</td>
                                <td class="text-center jugados">4</td>
                                <td class="text-center ganados">1</td>
                                <td class="text-center empatados">1</td>
                                <td class="text-center perdidos">3</td>
                                <td class="text-center goles_favor">5</td>
                                <td class="text-center goles_contra">13</td>
                                <td class="text-center diferencia">-8</td>

                            </tr>


                            <tr class="table-danger">

                                <th scope="row" class="text-center">
                                    5
                                </th>

                                <td>
                                    <a href="https://futbolme.com/resultados-directo/equipo/chipre/11850/datos"
                                        class="text-decoration-none color-black">

                                        <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid">

                                        <strong>Granada</strong>
                                    </a>
                                </td>

                                <td class="text-center puntos">0</td>
                                <td class="text-center jugados">5</td>
                                <td class="text-center ganados">0</td>
                                <td class="text-center empatados">0</td>
                                <td class="text-center perdidos">5</td>
                                <td class="text-center goles_favor">2</td>
                                <td class="text-center goles_contra">17</td>
                                <td class="text-center diferencia">-15</td>

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-goleadores" role="tabpanel" aria-labelledby="pills-goleadores-tab">
                {{-- TAB DE GOLEADORES --}}
                <div class="mt-5 pt-lg-5 pt-4 table-responsive">
                    <table id="tabla_goleadores" class="table table-hover table-white border-light">
                        <thead>
                            <tr class="table-success">
                                <th scope="col"></th>
                                <th scope="col">Jugador</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Goles</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Ronaldinho</td>
                                <td>FC Barcelona</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Herrera</td>
                                <td>FC Barcelona</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ronaldo</td>
                                <td>Real Madrid</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-equipo" role="tabpanel" aria-labelledby="pills-equipo-tab">
                {{-- TAB DE EQUIPO --}}
                <div class="container-fluid mt-5 pt-lg-5 pt-4">
                    <div class="row">
                        <div class="col-12 py-3 bg-white center_center mb-3">
                            <div class="escudo">
                                <a href="https://futbolme.com/resultados-directo/equipo/real-madrid-cf/415">
                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                </a>
                            </div>

                            <div class="nombre">
                                <a class="text-decoration-none fs-01 color-black fw-medium"
                                    href="https://futbolme.com/resultados-directo/equipo/real-madrid-cf/415"> Real
                                    Madrid</a>
                            </div>

                            <div class="indumentaria">
                                <a href="https://futbolme.com/resultados-directo/equipo/real-madrid-cf/415">
                                    <img class="img-fluid"
                                        src="https://futbolme.com//static/img/equipaciones/eq369.png" alt="">
                                </a>
                            </div>

                        </div>
                        <div class="col-12 py-3 bg-white center_center mb-3">
                            <div class="escudo">
                                <a href="#">
                                    <img src="https://assets.b365api.com/images/team/b/2817.png" alt="Real Madrid">
                                </a>
                            </div>

                            <div class="nombre">
                                <a class="text-decoration-none fs-01 color-black fw-medium" href="#"> FC
                                    Barcelona</a>
                            </div>

                            <div class="indumentaria">
                                <a href="#">
                                    <img class="img-fluid"
                                        src="https://futbolme.com//static/img/equipaciones/eq699.png" alt="">
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pills-calendario" role="tabpanel" aria-labelledby="pills-calendario-tab">
                {{-- TAB DE CALENDARIO --}}
                <div class="calendario_categorias mt-5 pt-lg-5 pt-4 mb-5">

                    {{-- HOY --}}
                    <div>
                        <h2 class="fecha_calendario_cat mb-4">Jueves, 20 de Abril de 2023</h2>
                        <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                    </div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                    </div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                        <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                    </div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                    </div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                        <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                    </div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i>
                                    </div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- RESTO DE JORNADAS --}}
                    <div class="jornadas_anteriores_futuras my-4">
                        <h2 class="fecha_calendario_cat mb-4">Martes, 22 de Abril de 2023</h2>
                        <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2">
                            <div class="d-flex aling-items-center justify-content-between partido_futuro">
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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">-</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">-</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>

                        <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2">
                            <div class="d-flex aling-items-center justify-content-between partido_futuro">
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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">-</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">-</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="jornadas_anteriores_futuras my-4">
                        <h2 class="fecha_calendario_cat mb-4">Sábado, 04 de Mayo de 2023</h2>
                        <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2 ">
                            <div class="d-flex aling-items-center justify-content-between partido_finalizado">
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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                    <div class="goleadores">
                                        <span class="d-block">0-1, Amath - 21´</span>
                                        <span class="d-block">0-2, Joan - 30´</span>
                                        <span class="d-block">1-3, Ronaldo - 55´</span>
                                    </div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">10</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">16</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>

                        <div id="" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2 ">
                            <div class="d-flex aling-items-center justify-content-between partido_finalizado">
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
                            <div
                                class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <h3 class="d-inline-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                    <div class="goleadores">
                                        <span class="d-block">0-1, Amath - 21´</span>
                                        <span class="d-block">0-2, Joan - 30´</span>
                                        <span class="d-block">1-3, Ronaldo - 55´</span>
                                    </div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">10</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">16</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none"><i class="bi bi-shield"></i></div>
                                    <h3 class="d-inline-block">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>





                </div>
            </div>
            <div class="tab-pane fade" id="pills-fichajes" role="tabpanel" aria-labelledby="pills-fichajes-tab">
                {{-- FICHAJES --}}
                <div class="accordion accordion-flush" id="accordionFichajes">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-silver-medium"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-01 color-black fw-medium"> Real
                                        Madrid</span>
                                </div>

                                <div class="rounded-circle bandera_pais">
                                    <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                        alt="bandera del pais del torneo" class="rounded-circle">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body">

                                {{-- jugadores --}}
                                <div class="d-flex align-items-center">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-silver-medium collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-01 color-black fw-medium"> Real
                                        Madrid</span>
                                </div>

                                <div class="rounded-circle bandera_pais">
                                    <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                        alt="bandera del pais del torneo" class="rounded-circle">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-silver-medium collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-01 color-black fw-medium"> Real
                                        Madrid</span>
                                </div>

                                <div class="rounded-circle bandera_pais">
                                    <img src="https://flagcdn.com/es.svg" width="32" height="32"
                                        alt="bandera del pais del torneo" class="rounded-circle">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ascensos-descensos" role="tabpanel"
                aria-labelledby="pills-ascensos-descensos-tab">...</div>
            <div class="tab-pane fade" id="pills-golaverage" role="tabpanel" aria-labelledby="pills-golaverage-tab">
                ...
            </div>
        </div>
    </section>



</x-layouts.app>
