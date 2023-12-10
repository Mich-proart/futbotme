@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <h1 class="text-center">
                {{ $dataEquipoLocal[0]->nombreCorto }} ({{ $datosPartido[0]->goles_local }}) vs
                ({{ $datosPartido[0]->goles_visitante }}) {{ $dataEquipoVisitante[0]->nombreCorto }}
            </h1>

            montar formas de updatear gol por medio de directos y por medio <br>
            de ligas y torneos
            <br><br><br>
            datos para agregar gol IdPartido,Idtemporada
            <br>
            <ul>
                <li>Gol equipoA David Soria Solís minuto 30', observación Una</li>
            </ul>
            <table width="100%" bgcolor="gainsboro">
                <tbody>
                    <tr>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">Jugador</span>
                                <br>
                                <select class="">
                                    @foreach ($plantillaLocal as $jugador)
                                        <option value="{{ $jugador->id }}">{{ ($jugador->apodo) }} - {{ $jugador->nombre }} {{ $jugador->apellidos }}</option>
                                    @endforeach
                                    @foreach ($plantillaVisitante as $jugador)
                                        <option value="{{ $jugador->id }}">{{ ($jugador->apodo) }} {{ $jugador->nombre }} {{ $jugador->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">minuto</span>
                                <input name="minuto" size="2">
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">tipo</span>
                                <select name="tipo">
                                    <option value="0">jugada</option>
                                    <option value="1">penalti</option>
                                    <option value="10">propia puerta</option>
                                    <option value="11">penalti fallado</option>
                                </select>
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">esLocal</span>
                                <input type="checkbox" name="" id="">
                            </div>
                        </td>
                        <td align="left">
                            <div class="mb-3">
                                <span style="cursor:pointer; color: maroon;vertical-align: top;" class="boldfont">observaciones</span>
                                <textarea name=""></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <button class="btn btn-primary my-2">Agregar gol</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row pb-3">
                <div class="col-12 mt-2">
                    <span class="">Observaciones partido</span>
                    <textarea class="w-100 my-2" name="" rows="10">{{ $datosPartido[0]->observaciones }}</textarea>
                </div>
                @foreach ($medios as $medio)
                    <div class="col-lg-2 col12">
                        <div class="form-check">
                            <input class="form-check-input" <?php if (intval($medio->id) === intval($medioPartido[0]->medio_id)) {
                                echo 'checked';
                            } else {
                                echo '';
                            } ?> type="checkbox" value=""
                                id="medio-{{ $medio->slug }}">
                            <label class="form-check-label" for="medio-{{ $medio->slug }}">
                                {{ $medio->nombre }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-primary btn-block my-2">Guardar</button>
        </div>
    </div> <!-- end row-->
@endsection
