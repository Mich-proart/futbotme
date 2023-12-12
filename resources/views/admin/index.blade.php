@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <a class="btn btn-primary my-3 btn-importar" href="{{ url('/admin-panel') }}" role="button" aria-haspopup="false"
                aria-expanded="false">Actualizar Datos</a>
        </div>
        <div class="d-flex align-items-center justify-content-start my-3">
            <span attr-id-partido="1114892" class="id-partido-directo-db fw-bold">Total partidos hoy: {{ $totalPartidosHoy }}</span>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                                <th scope="col">temporada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partidosTodosLosEstados as $partido)
                                <tr class="fila-directos-partido" tr-attr-id="{{ $partido['idBetsapi'] }}">
                                    <th scope="row"><span class="fila-id-directo-partido">{{ $partido['idPartido'] }}</span></th>
                                    <th scope="row">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $partido['idBetsapi'] }}</span>
                                        <input style="width: 78px;" class="fila-idBetsapi-directo-partido" type="text" name="" value="{{ $partido['idBetsapi'] }}">
                                    </th>
                                    <td>
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $partido['fecha'] }}</span>
                                        <input style="width: 100px;" class="fila-fecha-directo-partido" type="text" name="" value="{{ $partido['fecha'] }}">
                                    </td>
                                    <td>
                                        <input style="width: 74px;" class="fila-hora-directo-partido-prevista" type="text" name="" value="{{ $partido['hora_prevista'] }}">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $partido['hora_prevista'] }}</span>
                                    </td>
                                    <td>
                                        <input style="width: 74px;" class="fila-hora-directo-partido-real" type="text" name="" value="{{ $partido['hora_real'] }}">
                                        <span style="width: 0px;display: block;height: 0px;font-size: 0px;line-height: 0px;opacity: 0;">{{ $partido['hora_real'] }}</span>
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
                                        <input class="fila-local-gol-directo-partido" style="width: 28px;text-align: center;margin-left: 10px;" type="text" name="" value="{{ $partido['golLocal'] }}">
                                    </td>
                                    <td>
                                        <span attr-id="{{ $partido['idVisitante'] }}" class="mb-2 fila-visitante-directo-partido">{{ $partido['nombreVisitante'] }}</span>
                                        <input class="fila-visitante-gol-directo-partido" style="width: 28px;text-align: center;margin-left: 10px;" type="text" name="" value="{{ $partido['golVisitante'] }}">
                                    </td>
                                    <td><input class="btn btn-primary guardar-cambios-partidos-panel" type="button" value="Guardar"></td>
                                    <td><span attr-id="{{ $partido['tituloTemporada'][0]->id }}" class="fila-idTemporada-directo-partido">{{ $partido['tituloTemporada'][0]->nombre }}</span></td>
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
