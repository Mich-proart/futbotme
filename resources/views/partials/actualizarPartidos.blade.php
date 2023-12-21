<div class="accordion" id="PartidosEnDirecto">

    {{-- PARTIDOS MANUALES --}}

    <?php 
    

    $espanaPartidos = [];
    $otrosPartidos = [];

    foreach ($datosPartidos as $nombreTemporada => $partidos) {
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
    $contador = 01; 
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

        if (is_array($partidos)) {
            $ID_temporada = $partidos[0]['idTemporada'];
        } else {
            // Manejar el caso en que $partidos no es un array
            $ID_temporada = $contador;
        }

    ?>

    <div class="accordion-item br-0">
        <h2 class="accordion-header d-flex align-items-center justify-content-between text-white"
            id="panelFuturosOpen-manual<?php echo $ID_Temporada; ?>">

            <div class="py-2 col-lg-10 col d-flex align-items-center gap-3">
                <div class="d-block ps-4">
                    <span class="icon-resolve-filled">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </span>
                </div>

                <div class="d-inline-flex rounded-circle bandera_pais">
                    <img src="{{ $CC_pais }}" width="32" height="32" alt="bandera del pais del torneo"
                        class="rounded-circle">
                </div>

                <a href="{{ url('/resultados-directo/torneo/' . $slug . '/' . $ID_Temporada . '/') }}"
                    class="d-inline-block fs-01 nombre_torneo_liga"> <?php echo $nombreTemporada; ?>
                </a>
            </div>

            <button class="accordion-button w-auto py-lg-4 px-lg-5 p-2 text-white" type="button"
                data-bs-toggle="collapse" data-bs-target="#panelFuturosOpen-collapse<?php echo $ID_Temporada; ?>"
                aria-expanded="true" aria-controls="panelFuturosOpen-collapse<?php echo $ID_Temporada; ?>">
                <i class="bi bi-chevron-up fs-3"></i>
            </button>
        </h2>
        <div id="panelFuturosOpen-collapse<?php echo $ID_Temporada; ?>" class="accordion-collapse collapse show"
            aria-labelledby="panelFuturosOpen-heading<?php echo $ID_Temporada; ?>">

            <?php 
                foreach ($partidos as $partidoInfo) { 
                    /* FASE O JORNADA */
            if ($partidoInfo['datosTemporadaSeccion']['jornada'] >= 38) {
                $FaseJornada = $partidoInfo['datosTemporadaSeccion']['nombreFase'];
            }else {
                $FaseJornada = 'Jornada '.$partidoInfo['datosTemporadaSeccion']['jornada'];
            } 
            
            $observaciones = $partidoInfo['datosTemporadaSeccion']['observaciones'];
            
            // Buscar la posición de *A y *B en el string
            $posicionA = strpos($observaciones, '*A');
            $posicionB = strpos($observaciones, '*B');
            
            // Extraer la primera variable desde *A hasta justo antes de *B
            $goles_local = substr($observaciones, $posicionA + 2, $posicionB - ($posicionA + 2));
            
            // Extraer la segunda variable desde *B hasta el final del observaciones
            $goles_visitante = substr($observaciones, $posicionB + 2);
            ?>

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
                    <div class="col">
                        <span class="fs-00 d-grid grid-center-xy jornada_tiempo"><?php echo $FaseJornada; ?></span>
                    </div>
                    <div class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                        <span class="icon-alienacion d-inline-block fs-1 span-id-torneo-alineacion"
                            attr-id-evento="{{ $partidoInfo['datosTemporadaSeccion']['partidoId'] }}"></span>
                        <span class="icon-ball d-inline-block fs-1 span-evento-trigger"
                            attr-id-evento="{{ $partidoInfo['datosTemporadaSeccion']['partidoId'] }}"></span>
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
                        <div class="goleadores">
                            <span class="d-block">{!! $goles_local !!}</span>
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
                        <div class="goleadores">
                            <span class="d-block">{!! $goles_visitante !!}</span>
                        </div>
                    </div>
                </div>

            </div>


            <?php } ?>
        </div>
    </div>


    <?php 
 $contador++;
} ?>




</div>
