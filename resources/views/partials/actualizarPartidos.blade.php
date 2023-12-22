
<?php
    /* $indexMatch = array_filter($datosPartidos,array_column($datosPartidos,'bet365_id')); */

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
                    class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg_<?php echo $diferenciaEnMinutos; ?>_minutos text-white"><?php echo $diferenciaEnMinutos; ?>’</span>
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
