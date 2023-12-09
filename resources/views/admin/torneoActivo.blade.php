@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            url betsapi proximos partidos
            https://api.betsapi.com/v2/events/upcoming?sport_id=1&token=153716-4djEyj4e6JZVou&league_id=207&page=1
            <p>temporad id {{ $temporadaId }}idBetsapi {{ $idBetsapi }} la fase activa es {{ $faseActiva }}</p>
            
            <a href="/panelBack/partidosProximos.php?id=207&amp;temporada_id=1&amp;tipo_torneo=1" target="_blank">Próximos
                partidos BETSAPI</a>
            <select name="" id="">
                @foreach ($fasesTotales as $fases)
                    <option value="{{ $fases->id }}" <?php if(intval($fases->id) === intval($faseActiva)){echo "selected";}else{echo "";}?> >{{ $fases->nombre }} - {{ $fases->id }}</option>
                    {{-- <p class="<?php //if(intval($fases->id) === intval($faseActiva)){echo "text-danger";}else{echo "";}?>">{{ $fases->nombre }} - {{ $fases->id }}</p> --}}
                    {{-- {{ var_dump($fases->id); }} --}}
                @endforeach
            </select>
            {{-- <select name="" id="">
                @for ($i = 1; $i <= $totalJordanas; $i++)
                    <option value="{{ $i }}" <?php //if (intval($i) === intval($jornadaActiva)) {
                        // echo 'selected';
                    // } else {
                        // echo '';
                    // } ?>>Jornada {{ $i }}</option>
                @endfor
            </select> --}}
        </div>
        <div class="col-12">
            {{-- @dump($resultado) --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td class="estado">Estado</td>
                        <td colspan="4" class="text-center">Partido</td>
                        <td class="fecha">Fecha</td>
                        <td class="hora">Hora</td>
                        <td class="detallesP">Detalles</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultado as $item)
                        @if ($item->estado_partido == 2) {{ $item->estado_partido = 1 }} @endif
                        <tr>
                            <td class="estado">
                                <select name="estado_partido[]">
                                    @foreach ($estadosPartidos as $key => $status)
                                        <option value="{{ $key }}" <?php if(intval($item->estado_partido) != intval($key)){ echo "";}else{echo "selected";}?> >{{ $status }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td align="right">
                                <span style="color: maroon" class="boldfont">{{ $item->local }}</span>
                            </td>
                            <td align="center" width="10">
                                <input type="text" name="goles_local[]" value="{{ $item->goles_local }}" size="2" style="text-align: center">
                            </td>
                            <td align="center" width="10">
                                <input type="text" name="goles_visitante[]" value="{{ $item->goles_visitante }}" size="2"style="text-align: center">
                            </td>
                            <td>
                                <span style="color: maroon" class="boldfont">{{ $item->visitante }}</span>
                            </td>
                            <td class="fecha">
                                <input class="fecha_input" type="text" name="fecha[]" value="{{ $item->fecha }}" size="10">
                            </td>
                            <td class="hora">
                                <input class="hora_input" type="text" name="hora_prevista[]" value="{{ $item->hora_prevista }}" size="10">
                            </td>
                            <td class="detallesP">
                                <a href="">Ver/Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <!-- end row-->
@endsection
