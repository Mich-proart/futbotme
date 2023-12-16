@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3" id="info-btn-principales">
            <span class="fw-bold me-3">Total partidos hoy: {{ $totalPartidosHoy }}</span>
            <span 
            class="btn btn-primary my-3 btn-forzar-estados" 
            role="button" 
            aria-haspopup="false" 
            aria-expanded="false"
            data-bs-container="#info-btn-principales" 
            data-bs-toggle="tooltip" 
            data-bs-placement="top" 
            title="boton forzar actualización de datos por si existe algun fallo"
            >Verificar </span>
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
                            <?php $estado_clase = '';?>
                            @foreach ($partidosTodosLosEstados as $partido)
                                <?php if(intval($partido['estadoPartido']) === 2){ 
                                    $estado_clase = '<span class="badge bg-success rounded-pill">Directo</span>';
                                }elseif(intval($partido['estadoPartido']) === 1){ 
                                    $estado_clase = '<span class="badge bg-danger rounded-pill">Final</span>';
                                }else{ 
                                    $estado_clase = '<span class="badge bg-info rounded-pill">No jugado</span>';
                                }?>
                                <tr class="fila-directos-partido" tr-attr-id-partido="{{ $partido['idPartido'] }}" tr-attr-id="{{ $partido['idBetsapi'] }}">
                                    <th scope="row">
                                        {{-- <span class="badge bg-primary rounded-pill">Primary</span> --}}
                                        {{-- <span class="badge bg-secondary text-light rounded-pill">Secondary</span> --}}
                                        <?php echo $estado_clase; ?>
                                        {{-- <span class="badge bg-danger rounded-pill">Danger</span> --}}
                                        {{-- <span class="badge bg-warning rounded-pill">Warning</span> --}}
                                        {{-- <span class="badge bg-info rounded-pill">Info</span> --}}
                                        {{-- <span class="badge bg-light text-dark rounded-pill">Light</span> --}}
                                        {{-- <span class="badge bg-dark text-light rounded-pill">Dark</span> --}}
                                        <span class="fila-id-directo-partido">{{ $partido['idPartido'] }}</span>
                                    </th>
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
                                            <option value="3" <?php if(intval($partido['estadoPartido']) == 3){ echo "selected";}else{ echo '';}?> >Suspendido</option>
                                            <option value="4" <?php if(intval($partido['estadoPartido']) == 4){ echo "selected";}else{ echo '';}?> >Aplazado</option>
                                            <option value="5" <?php if(intval($partido['estadoPartido']) == 5){ echo "selected";}else{ echo '';}?> >Anulado</option>
                                            <option value="6" <?php if(intval($partido['estadoPartido']) == 6){ echo "selected";}else{ echo '';}?> >Descanso</option>
                                            <option value="7" <?php if(intval($partido['estadoPartido']) == 7){ echo "selected";}else{ echo '';}?> >Penaltis</option>
                                            <option value="8" <?php if(intval($partido['estadoPartido']) == 8){ echo "selected";}else{ echo '';}?> >Prórroga</option>
                                            <option value="9" <?php if(intval($partido['estadoPartido']) == 9){ echo "selected";}else{ echo '';}?> >Prór. 1T</option>
                                            <option value="10" <?php if(intval($partido['estadoPartido']) == 10){ echo "selected";}else{ echo '';}?> >Prór. 2T</option>
                                            <option value="11" <?php if(intval($partido['estadoPartido']) == 11){ echo "selected";}else{ echo '';}?> >Desc.Prór.</option>
                                            <option value="2" <?php if(intval($partido['estadoPartido']) == 2){ echo "selected";}else{ echo '';}?> >En juego</option>
                                            <option value="0" <?php if(intval($partido['estadoPartido']) == 0){ echo "selected";}else{ echo '';}?> >No jugado</option>
                                            <option value="1" <?php if(intval($partido['estadoPartido']) == 1){ echo "selected";}else{ echo '';}?> >FINAL</option>
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
    body > .wrapper{
        overflow-y: auto;    
    }
    .content-page .content .container-fluid{
        max-width: 100%!important;
    }
</style>
