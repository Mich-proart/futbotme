@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <a class="btn btn-primary my-3 btn-importar" href="{{ url('/admin-panel') }}" role="button" aria-haspopup="false"
                aria-expanded="false">Actualizar Datos</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="fixed-columns-datatable" class="table table-striped nowrap row-border order-column w-100">
                        <thead>
                            <tr>
                                <th scope="col">Id (Alin - evento)</th>
                                <th scope="col">Id bet365</th>
                                <th scope="col">Local</th>
                                <th scope="col">Visitante</th>
                                <th scope="col">Liga</th>
                                <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $directo)
                                <tr>
                                    <th scope="row">{{ $directo['id'] }}</th>
                                    <th scope="row">{{ $directo['bet365_id'] }}</th>
                                    <td>
                                        <ul class="d-flex list-unstyled">
                                            @foreach ($directo['home'] as $home)
                                                <li class="ps-2">{{ $home }}</li>
                                            @endforeach
                                        </ul>
                                        <div class="row">
                                            <div class="col-12">
                                                <select name="estado_partido">
                                                    <option value="0">No jugado</option>
                                                    <option value="1">FINAL</option>
                                                    <option value="2" selected="">En juego</option>
                                                    <option value="3">Suspendido</option>
                                                    <option value="4">Aplazado</option>
                                                    <option value="5">Anulado</option>
                                                    <option value="6">Descanso</option>
                                                    <option value="8">Prórroga</option>
                                                    <option value="9">Prór. 1T</option>
                                                    <option value="11">Desc.Prór.</option>
                                                    <option value="10">Prór. 2T</option>
                                                    <option value="7">Penaltis</option>
                                                </select>
                                                <h1>hola mundo</h1>
                                                <p>text Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                                                    nihil eligendi laboriosam</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="d-flex list-unstyled">
                                            @foreach ($directo['away'] as $away)
                                                <li class="ps-2">{{ $away }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="d-flex list-unstyled">
                                            @foreach ($directo['league'] as $liga)
                                                <li class="ps-2">{{ $liga }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        @php
                                            $timestamp = $directo['time'];
                                            $fecha = \Carbon\Carbon::createFromTimestamp($timestamp);
                                            $fecha_formateada = $fecha->format('Y-m-d H:i:s');
                                        @endphp
                                        {{ $fecha_formateada }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
