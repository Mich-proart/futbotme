@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-2">
            {{-- onchange="cargar_torneos(this.value,1,<?php //echo $externo?>)" --}}
            <h2 class="mt-0">Ligas</h2>
            <select attr-tipo-competicion="1" class="reset-select disparador-competicion w-100 me-3">
                <option value="0" selected>Categorias</option>
                <option value="1">RFEF</option>
                <option value="4">Autonómica</option>
                <option value="5">Juvenil</option>
                <option value="7">Femenino</option>
                <option value="9">Europa</option>
            </select>
        </div><!-- end col-->

        <div class="col-lg-10 position-relative">
            <div class="spinner-border spiner-competiciones" role="status" style="display:none;position: absolute;top: 50%;left: 45%;width: 100px;height:100px;z-index: 10;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="accordion custom-accordion acordion-competiciones mb-5" id="custom-accordion-one">
                <div class="placeholder-fantasma d-flex align-items-center justify-content-center" style="height: 300px;opacity: .3;">
                    <h1>Escoger competición</h1>
                </div>
            </div>
        </div>


        {{-- esto es para que muestres los directos agrupados --}}
        {{-- {{ $resultados }} --}}

        {{-- @foreach ($datos as $leagueId => $partidosPorLiga)
            <h3>Competicion ID: {{ $leagueId }}</h3>
            @foreach ($partidosPorLiga as $partido)
                <div>
                    <h4>Partido ID: {{ $partido['id'] }}</h4>
                    @if (isset($partido['league']))
                        <p>Liga: {{ $partido['league']['name'] }}</p>
                    @else
                        <p>Liga no disponible</p>
                    @endif
                    <p>Local: {{ $partido['home']['name'] }}</p>
                    <p>Visitante: {{ $partido['away']['name'] }}</p>
                    <!-- ... (otros datos que quieras mostrar) -->
                </div>
            @endforeach
        @endforeach --}}
    </div> <!-- end row-->
@endsection
