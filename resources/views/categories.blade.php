<x-layouts.app title="Categorias dinamicas" meta-description="Categorias page">

    {{-- {{ dd($torneo_Liga) }} --}}

    {{-- <p>Torneo ID: {{ $torneo_Liga->torneo_id }}</p>
    <p>Tipo Torneo: {{ $torneo_Liga->tipo_torneo }}</p> --}}

    <section class="header_cat p-4 my-3">
        <div class="d-flex align-items-center mb-3">
            <div class="rounded-circle bandera_pais">
                <img src="https://flagcdn.com/{{ $CC_Pais }}.svg" width="32" height="32"
                    alt="bandera del pais del torneo" class="rounded-circle">
            </div>
            <h1 class="color-brand-green text-uppercase ps-3 mb-0"> {{ $torneo_Liga->nombre }}</h1>
        </div>

        <p class="fs-000">{{ $torneo_Liga->nombre }} - Grupo 3, con 652 goles en 306 partidos, obtiene un coeficiente de
            2.13
            goles por
            partido, que materializan 128 victorias locales, 100 empates y 78 victorias visitantes.</p>
    </section>
    <section>
        <ul class="nav nav-pills mb-3 justify-content-lg-start justify-content-center pb-2" id="pills_tab_cat"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3 active" id="pills-jornada-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-jornada" type="button" role="tab"
                    aria-controls="pills-jornada" aria-selected="true">Jornada</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-goleadores-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-goleadores" type="button" role="tab"
                    aria-controls="pills-goleadores" aria-selected="false">Goleadores</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-equipo-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-equipo" type="button" role="tab"
                    aria-controls="pills-equipo" aria-selected="false">Equipo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-calendario-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-calendario" type="button" role="tab"
                    aria-controls="pills-calendario" aria-selected="false">Calendario</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-fichajes-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-fichajes" type="button" role="tab"
                    aria-controls="pills-fichajes" aria-selected="false">Fichajes</button>
            </li>
            <li class="nav-item" role="presentation">

                <a href="{{ route('categories-ascenso-descenso', ['nacional' => 'nacional']) }}"
                    class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3">Ascensos y descensos</a>

            </li>
            <li class="nav-item" role="presentation">
                <a href="{{ route('gol-average') }}" class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3">Gol
                    Average</a>

            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            {{-- TAB JORNADA --}}
            <div class="tab-pane fade show active" id="pills-jornada" role="tabpanel"
                aria-labelledby="pills-jornada-tab">
                {{-- CAMBIAR DE JORNADA --}}
                <form action="/actualizar-jornada" method="post" class="number-input text-white bg-gray-22 p-4">
                    @csrf
                    <label for="number" class="fs-4">JORNADA</label>
                    <input id="number" type="number" pattern="[0-9]*" name="value"
                        value="{{ $torneo_Liga->jornadaActiva }}" min="1" max="{{ $torneo_Liga->jornadas }}"
                        step="1" maxlength="3" class="text-white fs-4">
                    <div class="buttons_cat">
                        <div class="increment" onclick="incrementValue(this)"><i class="bi bi-chevron-up"></i></div>
                        <div class="decrement" onclick="decrementValue(this)"><i class="bi bi-chevron-down"></i></div>
                    </div>
                    <input type="hidden" name="id_temporada" value="{{ $ID_TL }}">
                </form>
                {{-- JORNADAS --}}
                <div class="jornadas_categorias mt-3 mb-5" id="jornadas_categorias">

                    {{-- {{dd($JornadaActiva)}} --}}
                    {{-- EJEMPLOS OJO CON LAS CLASES DE LOS DIRECTOS, FUTUROS Y FINALIZADOS --}}
                    {{--  <div id="" class="PartidosEnDirecto bg-white p-lg-4 p-3 mb-2">

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
                                        class="logo_s img-fluid">
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
                                        class="logo_s img-fluid">
                                </div>
                                <h3 class="d-block">FC Barcelona</h3>
                            </div>
                        </div>

                    </div> --}}
                    @foreach ($JornadaActiva as $partido)
                        <?php
                        $horabd = $partido->hora_prevista;
                        $HoraLimpia = substr($horabd, 0, -3); // Elimina los tres últimos caracteres :00
                        ?>
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
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">{{ $HoraLimpia }}</span>
                                    </div>

                                </div>
                                <div class="col">
                                    <span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada
                                        {{ $partido->jornada }}</span>
                                </div>
                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    {{-- <span class="icon-alienacion d-inline-block fs-1"></span>
                                <span class="icon-ball d-inline-block fs-1"></span> --}}
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="mx-0 partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">{{ $partido->local }}</h3>
                                    <div class="escudo d-lg-inline-block d-none">
                                        {{-- <img src="{{ asset('assets/images/img/club/escudo' . $partido->equipoLocal_id) }}.png" class="logo_s img-fluid"> --}}
                                    </div>
                                    <div class="goleadores">
                                        <span class="d-block">{!! $partido->observaciones !!}</span>
                                    </div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local color-red">{{ $partido->goles_local }}</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante color-red">{{ $partido->goles_visitante }}</span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none">
                                        {{-- <img src="{{ asset('assets/images/img/club/escudo' . $partido->equipoVisitante_id) }}.png" class="logo_s img-fluid"> --}}
                                    </div>
                                    <h3 class="d-block">{{ $partido->visitante }}</h3>
                                </div>
                            </div>

                        </div>
                    @endforeach



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

                        {{-- {{ dd($equipos) }} --}}
                        @foreach ($equipos as $equipo)
                            <div class="col-12 py-3 bg-white center_center mb-3">
                                <div class="escudo col-4">
                                    <a
                                        href="{{ url('/resultados-directo/equipo/real-madrid-cf/' . $equipo->equipo_id) }}">
                                        {{-- <img src="https://assets.b365api.com/images/team/b/{{ $equipo->betsapi }}.png" alt="escudo {{ $equipo->nombre }} " class="img-fluid"> --}}

                                        <img src="{{ asset('assets/images/img/club/escudo' . $equipo->club_id) }}.png"
                                            alt="escudo {{ $equipo->nombre }} " class="img-fluid">
                                    </a>
                                </div>

                                <div class="nombre col-4 text-center">
                                    <a class="text-decoration-none fs-22px color-black fw-semibold"
                                        href="{{ url('/resultados-directo/equipo/real-madrid-cf/' . $equipo->equipo_id) }}"
                                        class="img-fluid"> {{ $equipo->nombre }} </a>
                                </div>

                                <div class="indumentaria col-4 text-end">
                                    <a
                                        href="{{ url('/resultados-directo/equipo/real-madrid-cf/' . $equipo->equipo_id) }}">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/images/img/equipaciones/eq' . $equipo->equipacion_id) }}.png"
                                            alt="Equipacion {{ $equipo->nombre }}" class="img-fluid">
                                    </a>
                                </div>

                            </div>
                        @endforeach

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
                            <div class="mx-0 partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid">
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
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block">FC Barcelona</h3>
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
                            <div class="mx-0 partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid">
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
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block">FC Barcelona</h3>
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
                            <div class="mx-0 partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block">Real Madrid</h3>
                                    <div class="escudo d-lg-inline-block d-none"><img
                                            src="https://assets.b365api.com/images/team/m/2829.png"
                                            class="logo_s img-fluid">
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
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block">FC Barcelona</h3>
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
                            <div class="mx-0 partido_alineado my-2">
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
                            <div class="mx-0 partido_alineado my-2">
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
                            <div class="mx-0 partido_alineado my-2">
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
                            <div class="mx-0 partido_alineado my-2">
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
            <div class="tab-pane fade" id="pills-fichajes" role="tabpanel" aria-labelledby="pills-fichajes-tab">
                {{-- FICHAJES --}}
                <div class="accordion accordion-flush" id="accordionFichajes">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-green-directo"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid"
                                        class="img-fluid">
                                    <span class="text-decoration-none fs-22px color-black fw-semibold"> Real
                                        Madrid</span>
                                </div>

                                <div class="indumentaria">
                                    <img src="https://futbolme.com//static/img/equipaciones/eq369.png" alt=""
                                        class="img-fluid">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body bg-white-light px-0">

                                {{-- jugadores --}}
                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center item-fichajes">
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
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-green-directo collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-22px color-black fw-semibold"> Real
                                        Madrid</span>
                                </div>

                                <div class="indumentaria">
                                    <img src="https://futbolme.com//static/img/equipaciones/eq369.png" alt=""
                                        class="img-fluid">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body bg-white-light px-0">
                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center item-fichajes">
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
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-green-directo collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-22px color-black fw-semibold"> Real
                                        Madrid</span>
                                </div>

                                <div class="indumentaria">
                                    <img src="https://futbolme.com//static/img/equipaciones/eq369.png" alt=""
                                        class="img-fluid">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body bg-white-light px-0">

                                <div class="d-flex align-items-center item-fichajes">
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
            {{-- <div class="tab-pane fade" id="pills-ascensos-descensos" role="tabpanel"
                aria-labelledby="pills-ascensos-descensos-tab">...</div>
            <div class="tab-pane fade" id="pills-golaverage" role="tabpanel" aria-labelledby="pills-golaverage-tab">
                ...
            </div> --}}
        </div>
    </section>

    <script>
        /* SELECTOR DE JORNADAS */
        function incrementValue(element) {
            var input = element.parentNode.previousElementSibling;
            var value = parseInt(input.value);
            if (isNaN(value)) {
                value = 0;
            }
            input.value = Math.min(value + 1, parseInt(input.max) || Infinity);

        }

        function decrementValue(element) {
            var input = element.parentNode.previousElementSibling;
            var value = parseInt(input.value);
            if (isNaN(value) || value <= 0) {
                value = 0;
            } else {
                input.value = value - 1;
            }
        }


        $('#number').on('change', function() {
            var nuevoJActiva = $(this).val();
            var id = '{{ $ID_TL }}';

            $.ajax({
                url: '{{ route('actualizar-jornada') }}',
                method: 'POST',
                data: {
                    nuevoJActiva: nuevoJActiva,
                    id: id,
                    // Puedes agregar más datos si es necesario
                },
                success: function(response) {
                    // Actualizar el front-end con la nueva vista parcial
                    $('#jornadas_categorias').html(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error en la solicitud Ajax:", textStatus, errorThrown);

                    // Mostrar detalles del error en la consola
                    console.log(jqXHR);
                }
            });
        });
    </script>


</x-layouts.app>
