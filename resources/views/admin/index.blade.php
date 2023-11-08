@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <a class="btn btn-primary my-3 btn-importar" href="{{ url('/admin-panel') }}" role="button" aria-haspopup="false"
                aria-expanded="false">Actualizar Datos</a>
        </div>
        <div class="d-flex align-items-center justify-content-start my-3">
            <div id="reloj" class="px-3">00:00:00</div>
            <button class="btn ms-2 w-25 btn-success init-reloj-partido">init partido</button>
            <button class="btn ms-2 w-25 btn-info detener-reloj-partido">descanso</button>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="fixed-columns-datatable" class="table table-striped nowrap row-border order-column w-100">
                        <thead>
                            <tr>
                                <th scope="col">id partido</th>
                                <th scope="col">id betsapi</th>
                                <th scope="col">temporada</th>
                                <th scope="col">fecha</th>
                                <th scope="col">hora</th>
                                <th scope="col">estado</th>
                                <th scope="col">local</th>
                                <th scope="col">visitante</th>
                                <th scope="col">acción</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partidosTodosLosEstados as $partido)
                                <tr class="fila-directos-partido">
                                    <th scope="row"><span class="fila-id-directo-partido">{{ $partido['idPartido'] }}</span></th>
                                    <th scope="row"><span class="fila-idBetsapi-directo-partido">{{ $partido['idBetsapi'] }}</span></th>
                                    <td><span attr-id="{{ $partido['tituloTemporada'][0]->id }}" class="fila-idTemporada-directo-partido">{{ $partido['tituloTemporada'][0]->nombre }}</span></td>
                                    <td><span class="fila-fecha-directo-partido">{{ $partido['fecha'] }}</span></td>
                                    <td>
                                        <input style="width: 68px;" class="fila-hora-directo-partido" type="text" name="" value="{{ $partido['hora'] }}">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $partido['hora'] }}</span>
                                    </td>
                                    <td>
                                        <p class="mb-0" style="opacity: 0;font-size: 0;width: 0;height: 0;">{{ $partido['estadoPartido'] }}</p>
                                        <select class="fila-estado-directo-partido" name="estado_partido">
                                            <option value="3" <?php if($partido['estadoPartido'] == 3){ echo "selected";}else{ echo '';}?>>Suspendido</option>
                                            <option value="4" <?php if($partido['estadoPartido'] == 4){ echo "selected";}else{ echo '';}?>>Aplazado</option>
                                            <option value="5" <?php if($partido['estadoPartido'] == 5){ echo "selected";}else{ echo '';}?>>Anulado</option>
                                            <option value="6" <?php if($partido['estadoPartido'] == 6){ echo "selected";}else{ echo '';}?>>Descanso</option>
                                            <option value="7" <?php if($partido['estadoPartido'] == 7){ echo "selected";}else{ echo '';}?>>Penaltis</option>
                                            <option value="8" <?php if($partido['estadoPartido'] == 8){ echo "selected";}else{ echo '';}?>>Prórroga</option>
                                            <option value="9" <?php if($partido['estadoPartido'] == 9){ echo "selected";}else{ echo '';}?>>Prór. 1T</option>
                                            <option value="10" <?php if($partido['estadoPartido'] == 10){ echo "selected";}else{ echo '';}?>>Prór. 2T</option>
                                            <option value="11" <?php if($partido['estadoPartido'] == 11){ echo "selected";}else{ echo '';}?>>Desc.Prór.</option>
                                            <option value="2" <?php if($partido['estadoPartido'] == 2){ echo "selected";}else{ echo '';}?>>En juego</option>
                                            <option value="0" <?php if($partido['estadoPartido'] == 0){ echo "selected";}else{ echo '';}?>>No jugado</option>
                                            <option value="1" <?php if($partido['estadoPartido'] == 1){ echo "selected";}else{ echo '';}?>>FINAL</option>
                                        </select>
                                    </td>
                                    <td>
                                        <span attr-id="{{ $partido['idLocal'] }}" class="mb-2 fila-local-directo-partido">{{ $partido['nombreLocal'] }}</span>
                                        <input class="fila-local-gol-directo-partido" style="width: 12%;" type="text" name="" value="{{ $partido['golLocal'] }}">
                                    </td>
                                    <td>
                                        <span attr-id="{{ $partido['idVisitante'] }}" class="mb-2 fila-visitante-directo-partido">{{ $partido['nombreVisitante'] }}</span>
                                        <input class="fila-visitante-gol-directo-partido" style="width: 12%;" type="text" name="" value="{{ $partido['golVisitante'] }}">
                                    </td>
                                    <td><input class="btn btn-primary guardar-cambios-partidos-panel" type="button" value="Guardar"></td>
                                    {{-- <td>
                                        <div class="row">
                                            <p class="mb-0">{{ $partido->nombreVisitante }}</p>
                                            <input type="text" name="" value="{{ $partido->nombreVisitante }}">
                                        </div>
                                    </td> --}}
                                        {{-- <ul class="d-flex list-unstyled">
                                            @foreach ($directo['home'] as $home)
                                                <li class="ps-2">{{ $home }}</li>
                                            @endforeach
                                        </ul> --}}
                                        {{-- <div class="row">
                                            <div class="col-12"> --}}
                                                
                                                {{-- <h1>hola mundo</h1>
                                                <p>text Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                                                    nihil eligendi laboriosam</p>
                                            </div>
                                        </div> --}}
                                    {{-- </td>
                                    <td> --}}
                                        {{-- <ul class="d-flex list-unstyled">
                                            @foreach ($directo['away'] as $away)
                                                <li class="ps-2">{{ $away }}</li>
                                            @endforeach
                                        </ul> --}}
                                    {{-- </td>
                                    <td> --}}
                                        {{-- <ul class="d-flex list-unstyled"> --}}
                                            {{-- @foreach ($directo['league'] as $liga)
                                                <li class="ps-2">{{ $liga }}</li>
                                            @endforeach --}}
                                        {{-- </ul> --}}
                                    {{-- </td> --}}
                                    {{-- <td>
                                        @php
                                            $timestamp = $directo['time'];
                                            $fecha = \Carbon\Carbon::createFromTimestamp($timestamp);
                                            $fecha_formateada = $fecha->format('Y-m-d H:i:s');
                                        @endphp
                                        {{ $fecha_formateada }}</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
