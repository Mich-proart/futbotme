<div class="jornadas_categorias mt-3 mb-5" id="jornadas_categorias">

    {{dd($JornadaActiva)}}
    {{-- EJEMPLOS OJO CON LAS CLASES DE LOS DIRECTOS, FUTUROS Y FINALIZADOS --}}

    @foreach ($jornadaActivaData as $partido)
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
                <div class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
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
                        <span class="d-block">{!! $goles_local !!}</span>
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
                    <div class="goleadores">
                        <span class="d-block">{!! $goles_visitante !!}</span>
                    </div>
                </div>
            </div>

        </div>
    @endforeach



</div>
