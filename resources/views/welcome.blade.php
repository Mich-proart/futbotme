<x-layouts.app title="Home" meta-description="Home page">
    <script>
        window.onload = function() {
            generateCalendar();
            const currentDateElement = document.getElementById("currentDate");
            if (currentDateElement) {
                const today = new Date();
                const dayOfWeek = weekdays[today.getDay()];
                const day = today.getDate().toString().padStart(2, '0');
                const month = (today.getMonth() + 1).toString().padStart(2, '0');
                currentDateElement.textContent = `${dayOfWeek}, ${day}/${month}`;
            }
        };
    </script>
    <section>
        <div class="container-fluid pt-lg-5 pt-3">
            <div class="row row-cols-2 align-items-end justify-content-between">
                <div class="col-12">
                    {{-- <em class="text-danger">"estos partidos y datos esta condicionado estatico por el dia
                        2023-10-31"</em>
                    <br><br> --}}
                </div>
                {{-- <h4 class="px-0 fs-000 mb-1 text-lg-end color-gray-medium d-lg-none d-block">Actualizado: 16:45:52 </h4> --}}
                <div class="col-lg col-12 ">
                    <div class="container">
                        <div class="calendar-assets">
                            <button class="btn bth-hoy btn-small" onclick="resetDate()" title="Dia atual">
                                <i class="fas fa-calendar-day"></i> Hoy
                            </button>

                            <div class="day-assets d-flex align-items-center justify-content-between bg-white">
                                <button
                                    class="btn bg-gray br-0 px-4 py-2 d-flex align-items-center justify-content-between"
                                    onclick="prevDay()" title="Dia anterior">
                                    <i class=" bi bi-chevron-left fs-5"></i>
                                </button>
                                <div class="d-flex align-items-center justify-content-center">

                                    <div class="field ps-2">
                                        <form class="form-input" id="date-search" onsubmit="return setDate(this)">
                                            <input type="date" class="text-field" name="date" id="date"
                                                style="display: none;">

                                            <button type="button" class="btn bg-transparent border-0 color-black "
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-Calendar fs-03"></i>
                                            </button>

                                        </form>
                                    </div>
                                    <h2 class="fs-00 mb-0" id="currentDate"></h2>
                                </div>
                                <button
                                    class="btn bg-gray br-0 px-4 py-2 d-flex align-items-center justify-content-between"
                                    onclick="nextDay()" title="Próximo dia">
                                    <i class=" bi bi-chevron-right fs-5"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Calendario</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="calendar " id="table">
                                            <div class="header">
                                                <div class="month" id="month-header">

                                                </div>
                                                <div class="buttons">
                                                    <button class="icon" onclick="prevMonth()" title="Mes anterior"><i
                                                            class="bi bi-chevron-left"></i></button>
                                                    <button class="icon" onclick="nextMonth()" title="Próximo mes"><i
                                                            class="bi bi-chevron-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg col-12 mt-lg-0 mt-4 px-lg-3 px-0">
                    {{-- <h4 class="fs-000 mb-1 text-lg-end color-gray-medium d-lg-block d-none">Actualizado: 16:45:52 </h4> --}}
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

                {{-- PARTIDOS MANUALES --}}


                <?php 
                
                $espanaPartidos = [];
                $otrosPartidos = [];

                foreach ($partidosEnJuegoCurDate as $nombreTemporada => $partidos) {
                    // Suponiendo que $partidos es un arreglo asociativo y 'pais' es la clave que contiene el país
                    // Cadena dada
                    $string = $nombreTemporada;

                    // Verifica si la cadena contiene "PRIMERA DIVISIÓN", "SEGUNDA DIVISIÓN", "PREFERENTE", "REGIONAL", "GRUPO" o "FEDERACIÓN"
                    if (
                        strpos($string, "PRIMERA DIVISIÓN") !== false ||
                        strpos($string, "SEGUNDA DIVISIÓN") !== false ||
                        strpos($string, "PREFERENTE") !== false ||
                        strpos($string, "REGIONAL") !== false ||
                        strpos($string, "GRUPO") !== false ||
                        strpos($string, "FEDERACIÓN") !== false
                    ) {
                        // Si la cadena contiene alguna de las palabras clave, establece la variable del país a "España"
                        $pais = "España";
                    } else {
                        // Si no contiene ninguna de las palabras clave, encuentra el país después del guion
                        $paisArray = explode("-", $string);
                        
                        // Obtiene el último elemento del array después de dividir por el guion
                        $pais = trim(end($paisArray));
                    }

                    // Verifica si el país es España
                    if ($pais === 'España') {
                        $espanaPartidos[$nombreTemporada] = $partidos;
                    } else {
                        $otrosPartidos[$nombreTemporada] = $partidos;
                    }
                }

                // Concatena los arreglos, poniendo primero los partidos de España
                $partidosOrdenadosESLIVE = $espanaPartidos + $otrosPartidos;
                
                foreach ($partidosOrdenadosESLIVE as $nombreTemporada => $partidos) { 
                    //print_r($partidos); 
                    $slug = Str::slug($nombreTemporada);

                    // Cadena dada
                    $string = $nombreTemporada;

                    // Verifica si la cadena contiene "PRIMERA DIVISIÓN", "SEGUNDA DIVISIÓN", "PREFERENTE", "REGIONAL", "GRUPO" o "FEDERACIÓN"
                    if (
                        strpos($string, "PRIMERA DIVISIÓN") !== false ||
                        strpos($string, "SEGUNDA DIVISIÓN") !== false ||
                        strpos($string, "PREFERENTE") !== false ||
                        strpos($string, "REGIONAL") !== false ||
                        strpos($string, "GRUPO") !== false ||
                        strpos($string, "FEDERACIÓN") !== false
                    ) {
                        // Si la cadena contiene alguna de las palabras clave, establece la variable del país a "España"
                        $pais = "España";
                        //$CC_pais = obtenerCodigoPais($pais);
                        $CC_pais = app(\App\Http\Controllers\Controller::class)->obtenerCodigoPais($pais);
                    } else {
                        // Si no contiene ninguna de las palabras clave, encuentra el país después del guion
                        $paisArray = explode("-", $string);
                        
                        // Obtiene el último elemento del array después de dividir por el guion
                        $pais = trim(end($paisArray));
                        $CC_pais = app(\App\Http\Controllers\Controller::class)->obtenerCodigoPais($pais);
                    }
                ?>

                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between text-white"
                        id="panelFuturosOpen-manual<?php echo $partidos[0]['idTemporada']; ?>">

                        <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                            <div class="d-block ps-4">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>

                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/{{ $CC_pais }}.svg" width="32" height="32"
                                    alt="bandera del pais del torneo" class="rounded-circle">
                            </div>

                            <a href="{{ url('/resultados-directo/torneo/' . $slug . '/' . $partidos[0]['idTemporada'] . '/') }}"
                                class="d-inline-block fs-01 nombre_torneo_liga"> <?php echo $nombreTemporada; ?>
                            </a>
                        </div>

                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>"
                            aria-expanded="true" aria-controls="panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>" class="accordion-collapse collapse show"
                        aria-labelledby="panelFuturosOpen-heading<?php echo $partidos[0]['idTemporada']; ?>">

                        <?php foreach ($partidos as $partidoInfo) { ?>

                        <div class="accordion-body border-bottom partido_futuro"
                            id="PartidoID_{{ $partidoInfo['datosTemporadaSeccion']['partidoId'] }}">
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
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg_x_minutos text-white">x’</span>
                                    </div>

                                </div>
                                <div class="col"><span
                                        class="fs-00 d-grid grid-center-xy jornada_tiempo"><?php echo $partidos[0]['nombreFase']; ?></span>
                                </div>
                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    <span class="icon-alienacion d-inline-block fs-1 span-id-torneo-alineacion"
                                        attr-id-evento=""></span>
                                    <span class="icon-ball d-inline-block fs-1 span-evento-trigger"
                                        attr-id-evento=""></span>
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block"><?php echo $partidoInfo['datosTemporadaSeccion']['nombre_local']; ?></h3>
                                    <div class="escudo d-lg-inline-block d-none">
                                        {{-- <img src="https://assets.b365api.com/images/team/m/2829.png" class="logo_s img-fluid"> --}}
                                        <img src="{{ asset('assets/images/img/club/escudo' . $partidoInfo['datosTemporadaSeccion']['escudoLocal']) }}.png"
                                            class="logo_s img-fluid">
                                    </div>
                                </div>

                                <div class="marcador">
                                    <span class="goles-local"><?php echo $partidoInfo['datosTemporadaSeccion']['goles_local']; ?></span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante"><?php echo $partidoInfo['datosTemporadaSeccion']['goles_visitante']; ?></span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none">
                                        {{-- escudo --}}
                                        {{-- <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"> --}}
                                        <img src="{{ asset('assets/images/img/club/escudo' . $partidoInfo['datosTemporadaSeccion']['escudoVisitante']) }}.png"
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block"><?php echo $partidoInfo['datosTemporadaSeccion']['nombre_visitante']; ?></h3>
                                </div>
                            </div>

                        </div>


                        <?php } ?>
                    </div>
                </div>

                <?php } ?>

                {{-- DIRECTOS DE LA API  --}}
                {{-- @foreach ($directos as $leagueId => $partidosPorLiga)
                    <?php /* if (is_null($partidosPorLiga[0]['league']['cc'])) {
                        $bandera = 'eu';
                    } else {
                        $bandera = $partidosPorLiga[0]['league']['cc'];
                    } */
                    ?>

                    <div class="accordion-item br-0">
                        <h2 class="accordion-header d-flex align-items-center justify-content-between text-white"
                            id="panelsStayOpen-heading{{ $partidosPorLiga[0]['id'] }}">

                            <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                                <div class="d-block ps-4">
                                    <span class="icon-resolve-filled">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </span>
                                </div>

                                <div class="d-inline-flex rounded-circle bandera_pais">
                                    <img src="https://flagcdn.com/{{ $bandera }}.svg" width="32"
                                        height="32" alt="bandera del pais del torneo" class="rounded-circle">
                                </div>
                                @if ($partidosPorLiga[0]['league'])
                                    <a href="#" class="d-inline-block fs-01 nombre_torneo_liga"
                                        id="{{ $leagueId }}">{{ $partidosPorLiga[0]['league']['name'] }}</a>
                                @else
                                    <p>Liga no disponible</p>
                                @endif

                            </div>
                            <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapse{{ $partidosPorLiga[0]['id'] }}"
                                aria-expanded="true"
                                aria-controls="panelsStayOpen-collapse{{ $partidosPorLiga[0]['id'] }}">
                                <i class="bi bi-chevron-up fs-3"></i>
                            </button>
                        </h2>
                        @foreach ($partidosPorLiga as $partido)
                            <div id="panelsStayOpen-collapse{{ $partidosPorLiga[0]['id'] }}"
                                class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-heading{{ $partidosPorLiga[0]['id'] }}">
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
                                                    class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg_{{ $partido['timer']['tm'] }}_minutos text-white">{{ $partido['timer']['tm'] }}’</span>
                                            </div>

                                        </div>

                                        <div
                                            class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                            <span class="icon-alienacion d-inline-block fs-1 span-id-torneo-alineacion"
                                                attr-id-evento="{{ $partidosPorLiga[0]['id'] }}"></span>
                                            <span class="icon-ball d-inline-block fs-1 span-evento-trigger"
                                                attr-id-evento="{{ $partidosPorLiga[0]['id'] }}"></span>
                                            <span class="icon-TV d-inline-block fs-1"></span>
                                        </div>

                                    </div>
                                    <div class="mx-0 partido_alineado my-2">
                                        <div class="local">
                                            <h3 class="d-block">{{ $partido['home']['name'] }}</h3>
                                            <div class="escudo d-lg-inline-block d-none"><img
                                                    src="https://assets.b365api.com/images/team/m/{{ $partido['home']['image_id'] }}.png"
                                                    class="logo_s img-fluid"></div>
                                        </div>

                                        <div class="marcador">
                                            <span class="goles-local">{{ $partido['ss'] }}</span>
                                        </div>

                                        <div class="visitante">
                                            <div class="escudo d-lg-inline-block d-none"><img
                                                    src="https://assets.b365api.com/images/team/m/{{ $partido['away']['image_id'] }}.png"
                                                    class="logo_s img-fluid"></div>
                                            <h3 class="d-block">{{ $partido['away']['name'] }}</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="d-none content-eventos de-fila-partido">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <h3 class="d-block">Eventos</h3>
                                    <span class="cerrar-eventos display-4" style="cursor: pointer;">&times;</span>
                                </div>
                                <ul class="list-group lista-eventos text-left"></ul>
                            </div>


                            <div class="d-none content-alineaciones">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <h3 class="d-block">Alineaciones</h3>
                                    <span class="cerrar-alineacion display-4" style="cursor: pointer;">&times;</span>
                                </div>
                                <div class="align-items-start flex-wrap d-flex">
                                    <div class="left-content-alin pr-lg-3 w-50 text-left">
                                        <h4 class="title-alineacion title-alineacion-locales">Local</h4>
                                        <ul class="list-unstyled listado-locales"></ul>
                                    </div>
                                    <div class="rigth-content-alin w-50 text-left">
                                        <h4 class="title-alineacion title-alineacion-visitantes">Visitante</h4>
                                        <ul class="list-unstyled listado-visitantes"></ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach --}}



            </div>
            {{-- PUBLI --}}
            <div class="row my-4">
                <div class="col-12">
                    <div class="publi4"></div>
                </div>
            </div>

            {{-- FUTUROS Y FINALIZADOS --}}


            <div class="accordion" id="PartidosFuturos">

                {{-- {{ dd($partidosPorJugarCurDate) }} --}}
                {{-- PARTIDOS FUTUROS --}}
                <?php 
                $espanaPartidos = [];
                $otrosPartidos = [];

                foreach ($partidosPorJugarCurDate as $nombreTemporada => $partidos) {
                    // Suponiendo que $partidos es un arreglo asociativo y 'pais' es la clave que contiene el país
                    // Cadena dada
                    $string = $nombreTemporada;

                    // Verifica si la cadena contiene "PRIMERA DIVISIÓN", "SEGUNDA DIVISIÓN", "PREFERENTE", "REGIONAL", "GRUPO" o "FEDERACIÓN"
                    if (
                        strpos($string, "PRIMERA DIVISIÓN") !== false ||
                        strpos($string, "SEGUNDA DIVISIÓN") !== false ||
                        strpos($string, "PREFERENTE") !== false ||
                        strpos($string, "REGIONAL") !== false ||
                        strpos($string, "GRUPO") !== false ||
                        strpos($string, "FEDERACIÓN") !== false
                    ) {
                        // Si la cadena contiene alguna de las palabras clave, establece la variable del país a "España"
                        $pais = "España";
                    } else {
                        // Si no contiene ninguna de las palabras clave, encuentra el país después del guion
                        $paisArray = explode("-", $string);
                        
                        // Obtiene el último elemento del array después de dividir por el guion
                        $pais = trim(end($paisArray));
                    }

                    // Verifica si el país es España
                    if ($pais === 'España') {
                        $espanaPartidos[$nombreTemporada] = $partidos;
                    } else {
                        $otrosPartidos[$nombreTemporada] = $partidos;
                    }
                }

                // Concatena los arreglos, poniendo primero los partidos de España
                $partidosOrdenados = $espanaPartidos + $otrosPartidos;
                
                foreach ($partidosOrdenados as $nombreTemporada => $partidos) { 
                    //print_r($partidos); 
                    $slug = Str::slug($nombreTemporada);

                    // Cadena dada
                    $string = $nombreTemporada;

                    // Verifica si la cadena contiene "PRIMERA DIVISIÓN", "SEGUNDA DIVISIÓN", "PREFERENTE", "REGIONAL", "GRUPO" o "FEDERACIÓN"
                    if (
                        strpos($string, "PRIMERA DIVISIÓN") !== false ||
                        strpos($string, "SEGUNDA DIVISIÓN") !== false ||
                        strpos($string, "PREFERENTE") !== false ||
                        strpos($string, "REGIONAL") !== false ||
                        strpos($string, "GRUPO") !== false ||
                        strpos($string, "FEDERACIÓN") !== false
                    ) {
                        // Si la cadena contiene alguna de las palabras clave, establece la variable del país a "España"
                        $pais = "España";
                        //$CC_pais = obtenerCodigoPais($pais);
                        $CC_pais = app(\App\Http\Controllers\Controller::class)->obtenerCodigoPais($pais);
                    } else {
                        // Si no contiene ninguna de las palabras clave, encuentra el país después del guion
                        $paisArray = explode("-", $string);
                        
                        // Obtiene el último elemento del array después de dividir por el guion
                        $pais = trim(end($paisArray));
                        $CC_pais = app(\App\Http\Controllers\Controller::class)->obtenerCodigoPais($pais);
                    }


                    /* FASE O JORNADA */
                    if ($partidoInfo['datosTemporadaSeccion']['jornada'] >= 38) {
                        $FaseJornada = $partidoInfo['datosTemporadaSeccion']['nombreFase'];
                    }else {
                        $FaseJornada = 'Jornada '.$partidoInfo['datosTemporadaSeccion']['jornada'];
                    }
                ?>

                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelFuturosOpen-heading<?php echo $partidos[0]['idTemporada']; ?>">

                        <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                            <div class="d-block ps-4">
                                <span class="icon-resolve-filled">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </span>
                            </div>

                            <div class="d-inline-flex rounded-circle bandera_pais">
                                <img src="https://flagcdn.com/{{ $CC_pais }}.svg" width="32" height="32"
                                    alt="bandera del pais del torneo" class="rounded-circle">
                            </div>

                            <a href="{{ url('/resultados-directo/torneo/' . $slug . '/' . $partidos[0]['idTemporada'] . '/') }}"
                                class="d-inline-block fs-01 nombre_torneo_liga"> <?php echo $nombreTemporada; ?>
                            </a>
                        </div>

                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>"
                            aria-expanded="true" aria-controls="panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>" class="accordion-collapse collapse show"
                        aria-labelledby="panelFuturosOpen-heading<?php echo $partidos[0]['idTemporada']; ?>">

                        <?php foreach ($partidos as $partidoInfo) { ?>
                        {{-- echo "- Partido ID: " . $partidoInfo['datosTemporadaSeccion']["partidoId"] . </br>"; --}}

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
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">
                                            {{-- HORA --}}
                                            <?php
                                            $horabd = $partidoInfo['datosTemporadaSeccion']['horaPartido'];
                                            $HoraLimpia = substr($horabd, 0, -3); // Elimina los tres últimos caracteres :00
                                            
                                            echo $HoraLimpia;
                                            ?>
                                        </span>
                                    </div>

                                </div>
                                <div class="col"><span
                                        class="fs-00 d-grid grid-center-xy jornada_tiempo"><?php echo $FaseJornada; ?></span>
                                </div>
                                <div
                                    class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                    <span class="icon-TV d-inline-block fs-1"></span>
                                </div>

                            </div>
                            <div class="partido_alineado my-2">
                                <div class="local">
                                    <h3 class="d-block"><?php echo $partidoInfo['datosTemporadaSeccion']['nombre_local']; ?></h3>
                                    <div class="escudo d-lg-inline-block d-none">
                                        {{-- <img src="https://assets.b365api.com/images/team/m/2829.png" class="logo_s img-fluid"> --}}
                                        <img src="{{ asset('assets/images/img/club/escudo' . $partidoInfo['datosTemporadaSeccion']['escudoLocal']) }}.png"
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
                                        {{-- escudo --}}
                                        {{-- <img src="https://assets.b365api.com/images/team/m/2817.png"
                                            class="logo_s img-fluid"> --}}
                                        <img src="{{ asset('assets/images/img/club/escudo' . $partidoInfo['datosTemporadaSeccion']['escudoVisitante']) }}.png"
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block"><?php echo $partidoInfo['datosTemporadaSeccion']['nombre_visitante']; ?></h3>
                                </div>
                            </div>

                        </div>


                        <?php } ?>
                    </div>
                </div>

                <?php } ?>

                {{-- PARTIDOS FINALIZADOS --}}

                {{-- echo 'PARTIDOS TERMINADOS</br>' --}}
                <?php foreach ($partidosTerminadosCurDate as $nombreTemporada => $partidos) {
                $slug = Str::slug($nombreTemporada);    
                ?>
                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelFuturosOpen-heading<?php echo $partidos[0]['idTemporada']; ?>">

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

                            <a href="{{ url('/resultados-directo/torneo/' . $slug . '/' . $partidos[0]['idTemporada'] . '/') }}"
                                class="d-inline-block fs-01 nombre_torneo_liga"><?php echo $nombreTemporada; ?></a>
                        </div>

                        <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>"
                            aria-expanded="true" aria-controls="panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>">
                            <i class="bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelFuturosOpen-collapse<?php echo $partidos[0]['idTemporada']; ?>" class="accordion-collapse collapse show"
                        aria-labelledby="panelFuturosOpen-heading<?php echo $partidos[0]['idTemporada']; ?>">
                        <?php foreach ($partidos as $partidoInfo) {
                            //echo '- Partido ID: ' . $partidoInfo['datosTemporadaSeccion']['partidoId'] .'';

                            $observaciones = $partidoInfo['datosTemporadaSeccion']['observaciones'];
                        
                        // Buscar la posición de *A y *B en el string
                        $posicionA = strpos($observaciones, '*A');
                        $posicionB = strpos($observaciones, '*B');
                        
                        // Extraer la primera variable desde *A hasta justo antes de *B
                        $goles_local = substr($observaciones, $posicionA + 2, $posicionB - ($posicionA + 2));
                        
                        // Extraer la segunda variable desde *B hasta el final del observaciones
                        $goles_visitante = substr($observaciones, $posicionB + 2);
                            ?>

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
                                            class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">
                                            {{-- HORA --}}
                                            <?php
                                            $horabd = $partidoInfo['datosTemporadaSeccion']['horaPartido'];
                                            $HoraLimpia = substr($horabd, 0, -3); // Elimina los tres últimos caracteres :00
                                            
                                            echo $HoraLimpia;
                                            ?>
                                        </span>
                                    </div>

                                </div>
                                <div class="col">
                                    <span class="fs-00 d-grid grid-center-xy jornada_tiempo">
                                        <?php echo $partidos[0]['nombreFase']; ?>
                                    </span>
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
                                    <h3 class="d-block"><?php echo $partidoInfo['datosTemporadaSeccion']['nombre_local']; ?></h3>
                                    <div class="escudo d-lg-inline-block d-none">
                                        <img src="{{ asset('assets/images/img/club/escudo' . $partidoInfo['datosTemporadaSeccion']['escudoLocal']) }}.png"
                                            class="logo_s img-fluid">
                                    </div>
                                    <div class="goleadores">
                                        <span class="d-block">{!! $goles_local !!}</span>
                                    </div>
                                </div>

                                <div class="marcador ">
                                    <span class="goles-local"><?php echo $partidoInfo['datosTemporadaSeccion']['goles_local']; ?></span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante"><?php echo $partidoInfo['datosTemporadaSeccion']['goles_visitante']; ?></span>
                                </div>

                                <div class="visitante">
                                    <div class="escudo d-lg-inline-block d-none">
                                        <img src="{{ asset('assets/images/img/club/escudo' . $partidoInfo['datosTemporadaSeccion']['escudoVisitante']) }}.png"
                                            class="logo_s img-fluid">
                                    </div>
                                    <h3 class="d-block"><?php echo $partidoInfo['datosTemporadaSeccion']['nombre_visitante']; ?></h3>
                                    <div class="goleadores">
                                        <span class="d-block">{!! $goles_visitante !!}</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php } ?>
                    </div>
                </div>
                <?php } ?>



            </div>
        </div>
    </section>


    <script>
        function terravison() {
            $.ajax({
                url: '{{ route('leer-fichero') }}',
                method: 'POST',
                /* data: {
                    nuevoJActiva: nuevoJActiva,
                    id: id,
                    _token: '{{ csrf_token() }}',
                }, */
                success: function(response) {
                    // Actualizar el front-end con la nueva vista parcial
                    //$('#jornadas_categorias').html(response);
                    console.log(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Error en la solicitud Ajax:", textStatus, errorThrown);

                    // Mostrar detalles del error en la consola
                    console.log(jqXHR);
                }
            });
        }


        function terravison22() {
            $.ajax({
                url: '{{ route('leer-fichero22') }}',
                method: "POST",
                // data: {
                //     formData,
                // },
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                beforeSend: function() {
                    // $(".spiner-competiciones").fadeIn();
                    // $(acordion).html("");
                },
                success: function(response) {
                    console.log(response);
                    // let result = JSON.parse(response);
                },
                complete: function() {
                    //$(".spiner-competiciones").fadeOut();
                },
            });
        }


        setInterval(() => {
            console.log("leyendo ficheros")
            terravison()
            terravison22()
        }, 1000);
    </script>

</x-layouts.app>
