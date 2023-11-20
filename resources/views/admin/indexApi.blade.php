@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <h1>Directos Betsapi</h1>
            <p>*pagina donde mostramos los directos solo de la API</p>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- @dump($directosAPI) --}}
                    {{-- <ul> --}}

                        {{-- @foreach ($directosAPI as $directo )

                        <li>{{ $directo['id'] }}</li>
                        <li>{{ $directo['sport_id'] }}</li>
                        <li>{{ $directo['time'] }} - {{ $fechaFormateada }} - {{ $horaFormateada }}</li>
                        <li>{{ $directo['time_status'] }}</li>
                        <li>{{ $directo['league']['id'] }}</li>
                        
                        @endforeach --}}
                    {{-- </ul> --}}
                    <table id="fixed-columns-datatable" class="table table-striped nowrap row-border order-column w-100">
                        <thead>
                            <tr>
                                <th scope="col">id partido</th>
                                <th scope="col">id betsapi</th>
                                <th scope="col">fecha</th>
                                <th scope="col">hora prevista</th>
                                <th scope="col">hora real</th>
                                <th scope="col">estado</th>
                                <th scope="col">local</th>
                                <th scope="col">visitante</th>
                                <th scope="col">acción</th>
                                {{-- <th scope="col">temporada</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            // Establece explícitamente la zona horaria a 'Europe/Madrid'
                            $zonaHoraria = 'Europe/Madrid';
                            \Carbon\Carbon::setToStringFormat('Y-m-d H:i:s');
                            @endphp
                            @foreach ($directosAPI as $directo )
                                @php 
                                    $zonaHoraria = 'Europe/Madrid'; // Establece la zona horaria correspondiente
                                    $fechaHora = \Carbon\Carbon::createFromTimestamp($directo['time'], $zonaHoraria);
                                    $fechaFormateada = $fechaHora->format('Y-m-d'); // Formato: Año-Mes-Día 
                                    $horaFormateada = $fechaHora->format('H:i:s'); // Formato: Hora:Minutos:Segundos
                                    //$directoGol = explode('-', $directo['ss']);
                                @endphp
                                    
                                <tr class="fila-directos-partido">
                                    <th scope="row"><span class="fila-id-directo-partido" style="color: #9D1F3D;">No disponible</span></th>
                                    <th scope="row">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $directo['id'] }}</span>
                                        <input style="width: 78px;" class="fila-idBetsapi-directo-partido" type="text" name="" value="{{ $directo['id'] }}">
                                    </th>
                                    <td>
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $fechaFormateada }}</span>
                                        <input style="width: 100px;" class="fila-fecha-directo-partido" type="text" name="" value="{{ $fechaFormateada }}">
                                    </td>
                                    <td>
                                        <input style="width: 74px;" class="fila-hora-directo-partido-prevista" type="text" name="" value="{{ $horaFormateada }}">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $horaFormateada }}</span>
                                    </td>
                                    <td>
                                        <input style="width: 74px;" class="fila-hora-directo-partido-real" type="text" name="" value="{{ $horaFormateada }}">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $horaFormateada }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $directo['time_status'] }}</span>
                                    </td>
                                    <td>
                                        <span class="me-2">{{ $directo['home']['name'] }}</span>
                                        @if(isset($directo['scores']['2']['home']))
                                            <span style="color: #9D1F3D;">{{ $directo['scores']['2']['home'] }}</span>
                                        @else
                                            <span style="color: #9D1F3D;">No disponible</span>
                                        @endif
                                        {{-- <span>{{ $directo['scores']['2']['home'] }}</span> --}}
                                    </td>
                                    <td>
                                        <span class="me-2">{{ $directo['away']['name'] }}</span>
                                        @if(isset($directo['scores']['2']['home']))
                                            <span style="color: #9D1F3D;">{{ $directo['scores']['2']['home'] }}</span>
                                        @else
                                            <span style="color: #9D1F3D;">No disponible</span>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        <span attr-id="{{ $partido['idLocal'] }}" class="mb-2 fila-local-directo-partido">{{ $partido['nombreLocal'] }}</span>
                                        <input class="fila-local-gol-directo-partido" style="width: 28px;text-align: center;margin-left: 10px;" type="text" name="" value="{{ $partido['golLocal'] }}">
                                    </td>
                                    <td>
                                        <span attr-id="{{ $partido['idVisitante'] }}" class="mb-2 fila-visitante-directo-partido">{{ $partido['nombreVisitante'] }}</span>
                                        <input class="fila-visitante-gol-directo-partido" style="width: 28px;text-align: center;margin-left: 10px;" type="text" name="" value="{{ $partido['golVisitante'] }}">
                                    </td> --}}
                                    <td><input class="btn btn-primary guardar-cambios-partidos-panel" type="button" value="Guardar"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection

<style>
    .content-page .content .container-fluid{
        max-width: 100%!important;
    }
</style>
