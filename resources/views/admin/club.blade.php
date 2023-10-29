@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-2">
            <h2 class="mt-0">Paises</h2>
            <select class="disparador-paises w-100 me-3">
                <option value="0" selected>paises</option>
                @foreach ($paises as $key => $pais)
                    <option value="{{ $pais->id }}" data-nombre="{{ $pais->nombre }}">{{ $pais->nombre }}</option>
                @endforeach
            </select>
        </div><!-- end col-->

        <div class="col-lg-10 position-relative col-clubes">
            <div class="spinner-border spiner-clubes" role="status" style="display:none;position: absolute;top: 50%;left: 45%;width: 100px;height:100px;z-index: 10;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="placeholder-fantasma placeholder-fantasma-clubes d-flex align-items-center justify-content-center" style="height: 300px;opacity: .3;">
                <h1>Escoger pais</h1>
            </div>
            <ul class="list-group list-group-flush listado-club-por-pais">
                <li class="list-group-item" style="cursor:pointer;">pais</li>
            </ul>
        </div>
    </div> <!-- end row-->
@endsection