@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h1>Jugadores</h1>
        </div><!-- end col-->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="fixed-columns-datatable-jugadores"
                        class="table table-striped nowrap row-border order-column w-100">
                        <thead>
                            <tr>
                                <th>id Jugador</th>
                                <th>Nombre</th>
                                <th>Apodo</th>
                                <th>Posición</th>
                                <th>Sexo</th>
                                <th>Fecha nacimiento</th>
                                <th>Lugar nacimiento</th>
                                <th>Equipo actual</th>
                                <th>Caracteristicas</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
