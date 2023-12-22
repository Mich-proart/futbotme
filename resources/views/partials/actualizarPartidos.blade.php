{{-- 'datosPartidos','PartidosIDs' --}}

@foreach ($PartidosIDs as $PartidoID)
    <?php
    //$indexMatch = array_filter($PartidoID, array_column($datosPartidos, 'bet365_id'));
    $indexMatch = array_filter( array_column($datosPartidos, 'bet365_id', $PartidoID));
    $PartidoJson = $datosPartidos[$indexMatch];
    
    /* RUTAS DE IMAGENES DE ESCUDO */
    /* LOCAL */
    $imagenURLLocal = "https://assets.b365api.com/images/team/m/{$PartidoJson['home']['image_id']}.png";
    
    $headers = get_headers($imagenURLLocal);
    
    // Verificar si la imagen existe
    if ($headers && strpos($headers[0], '200') !== false) {
        // La imagen existe, utiliza la URL original
        $rutaImagenLocal = $imagenURLLocal;
    } else {
        // La imagen no existe, utiliza otra ruta
        $rutaImagenLocal = asset('assets/images/img/club/escudo');
    }
    /* VISITANTE */
    $imagenURLVisit = "https://assets.b365api.com/images/team/m/{$PartidoJson['away']['image_id']}.png";
    
    $headersV = get_headers($imagenURLVisit);
    
    // Verificar si la imagen existe
    if ($headersV && strpos($headersV[0], '200') !== false) {
        // La imagen existe, utiliza la URL original
        $rutaImagenVisit = $imagenURLVisit;
    } else {
        // La imagen no existe, utiliza otra ruta
        $rutaImagenVisit = asset('assets/images/img/club/escudo');
    }
    
    ?>

    <div class="accordion-body border-bottom partido_futuro" id="PartidoID_{{ $PartidoJson['bet365_id'] }}">
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
                        class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-4 bg_{{ $PartidoJson['timer']['tm'] }}_minutos text-white">{{ $PartidoJson['timer']['tm'] }}’</span>
                </div>

            </div>
            <div class="col">
                <span class="fs-00 d-grid grid-center-xy jornada_tiempo"><?php echo $FaseJornada; ?></span>
            </div>
            <div class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                <span class="icon-alienacion d-inline-block fs-1 span-id-torneo-alineacion"
                    attr-id-evento="{{ $PartidoJson['bet365_id'] }}"></span>
                <span class="icon-ball d-inline-block fs-1 span-evento-trigger"
                    attr-id-evento="{{ $PartidoJson['bet365_id'] }}"></span>
                <span class="icon-TV d-inline-block fs-1"></span>
            </div>

        </div>
        <div class="partido_alineado my-2">
            <div class="local">
                <h3 class="d-block">{{ $PartidoJson['home']['name'] }}</h3>
                <div class="escudo d-lg-inline-block d-none">

                    <img src="{{ $rutaImagenLocal }}" class="logo_s img-fluid">
                </div>
                <div class="goleadores">
                    {{-- <span class="d-block">{!! $goles_local !!}</span> --}}
                </div>
            </div>

            <div class="marcador">
                <span class="goles-local">{{ $PartidoJson['ss'] }}</span>
            </div>

            <div class="visitante">
                <div class="escudo d-lg-inline-block d-none">
                    <img src="{{ $rutaImagenVisit }}" class="logo_s img-fluid">
                </div>
                <h3 class="d-block">{{ $PartidoJson['away']['name'] }}</h3>
                <div class="goleadores">
                    {{-- <span class="d-block">{!! $goles_visitante !!}</span> --}}
                </div>
            </div>
        </div>

        {{-- MODALES --}}

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

    </div>
@endforeach
