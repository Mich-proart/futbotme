@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            {{-- <strong>{{ $urlUpcomingPartido }}</strong> --}}
            <h1>aqui onchange para cambiar de jornada</h1>
            <p>temporad id {{ $temporadaId }} idBetsapi {{ $idBetsapi }} la jornada activa es {{ $jornadaActiva }} y el total de jornadas es : {{ $totalJordanas }}</p>
            <a href="{{ $urlUpcomingPartido }}" target="_blank">Próximos
                partidos BETSAPI</a>
            @if ($totalJordanas > 0)
                <select name="" id="">
                    @for ($i = 1; $i <= $totalJordanas; $i++)
                        <option value="{{ $i }}" <?php if (intval($i) === intval($jornadaActiva)) {
                            echo 'selected';
                        } else {
                            echo '';
                        } ?> >Jornada {{ $i }}</option>
                    @endfor
                </select>
            @endif
        </div>
        <div class="col-12">
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
                        {{-- @if ($item->estado_partido == 2) {{ $item->estado_partido = 1 }} @endif --}}
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
                                <a href="{{ url('/admin-panel/editar-partido-no-direct/' . $item->partido_id) }}">Ver/Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <!-- end row-->
@endsection
