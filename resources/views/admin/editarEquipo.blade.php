@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h1>{{ $dataEquipo[0]->nombre }}</h1>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="{{ $dataEquipo[0]->nombre }}"
                    value="{{ $dataEquipo[0]->nombre }}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" placeholder="{{ $dataEquipo[0]->nombre_completo }}"
                    value="{{ $dataEquipo[0]->nombre_completo }}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Fundado</label>
                <input type="text" class="form-control" placeholder="{{ $dataEquipo[0]->nombre_completo }}"
                    value="{{ $dataEquipo[0]->fundado }}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Desaparecido</label>
                <input type="text" class="form-control" placeholder="{{ $dataEquipo[0]->nombre_completo }}"
                    value="{{ $dataEquipo[0]->desaparecido }}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Debut nacional</label>
                <input type="text" class="form-control" placeholder="{{ $dataEquipo[0]->nombre_completo }}"
                    value="{{ $dataEquipo[0]->debut_nacional }}">
            </div>
        </div>
        <div class="col-xl-6 col-12 d-flex justify-content-around align-content-center">
            <div class="mb-3">
                <label for="projectname" class="form-label">Estadio</label><br>
                <select name="">
                    @foreach ($dataEstadios as $estadio)
                        <option value="{{ $estadio->id }}" <?php if ($estadio->id == $dataEquipo[0]->estadio_id) {
                            echo 'selected';
                        } else {
                            echo '';
                        } ?>>{{ $estadio->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="projectname" class="form-label">Categoría</label><br>
                <select name="">
                    <option value="1" <?php if ($dataEquipo[0]->categoria_id == 1) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Senior Masculino</option>
                    <option value="2" <?php if ($dataEquipo[0]->categoria_id == 2) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Senior Femenino</option>
                    <option value="3" <?php if ($dataEquipo[0]->categoria_id == 3) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Juvenil</option>
                    <option value="5" <?php if ($dataEquipo[0]->categoria_id == 5) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Absoluta Mas.</option>
                    <option value="6" <?php if ($dataEquipo[0]->categoria_id == 6) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Absoluta Fem.</option>
                    <option value="7" <?php if ($dataEquipo[0]->categoria_id == 7) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 21 Mas.</option>
                    <option value="8" <?php if ($dataEquipo[0]->categoria_id == 8) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 20 Mas.</option>
                    <option value="9" <?php if ($dataEquipo[0]->categoria_id == 9) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 19 Mas.</option>
                    <option value="10" <?php if ($dataEquipo[0]->categoria_id == 10) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 17 Mas.</option>
                    <option value="11" <?php if ($dataEquipo[0]->categoria_id == 11) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 20 Fem.</option>
                    <option value="12" <?php if ($dataEquipo[0]->categoria_id == 12) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 19 Fem.</option>
                    <option value="13" <?php if ($dataEquipo[0]->categoria_id == 13) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>SUB 17 Fem.</option>
                    <option value="19" <?php if ($dataEquipo[0]->categoria_id == 19) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Olimpica Mas.</option>
                    <option value="20" <?php if ($dataEquipo[0]->categoria_id == 20) {
                        echo 'selected';
                    } else {
                        echo '';
                    } ?>>Olimpica Fem.</option>
                </select>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Equipación</label><br>
                <select name="" class="w-75">
                    @foreach ($dataEquipaciones as $equipacion)
                        <option value="{{ $equipacion->id }}" <?php if ($equipacion->id == $dataEquipo[0]->equipacion_id) {
                            echo 'selected';
                        } else {
                            echo '';
                        } ?>>{{ $equipacion->camiseta }} -
                            {{ $equipacion->pantalon }} - {{ $equipacion->media }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label>Temporadas</label>
                <ul class="list-unstyled">
                    @foreach ($dataTemporadas as $temporada)
                        <li><span attr-id="{{ $temporada->temporada_id }}">{{ $temporada->nombre }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="inbox-widget">
                @foreach ($dataPlantillaEquipo as $value)
                    <div class="inbox-item">
                        <div class="inbox-item-img">
                            <img src="{{ asset('assets/images/img/jugadores/jugador' . $value->id . '.jpg') }}"
                                class="rounded-circle" alt="{{ $value->nombre }}">
                        </div>
                        <p class="inbox-item-author">{{ $value->nombre }}</p>
                        @switch($value->posicion)
                            @case('1')
                                <?php $posicion = 'POR'; ?>
                            @break

                            @case('2')
                                <?php $posicion = 'DEF'; ?>
                            @break

                            @case('3')
                                <?php $posicion = 'MED'; ?>
                            @break

                            @case('4')
                                <?php $posicion = 'DEL'; ?>
                            @break

                            @case('5')
                                <?php $posicion = 'ENT'; ?>
                            @break

                            @default
                                <?php $posicion = 'SD'; ?>
                        @endswitch

                        <p class="inbox-item-text">{{ $posicion }}</p>
                        <p class="inbox-item-date d-flex align-items-center justify-content-center">
                            <span class="inbox-item-text"><?php if ($value->es_baja == 1) {
                                echo 'es baja';
                            } else {
                                echo 'no baja';
                            } ?></span>
                            <a href="/admin-panel/jugadores/editar-jugador/{{$value->id}}" class="btn btn-sm btn-link text-info font-13">Editar</a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
