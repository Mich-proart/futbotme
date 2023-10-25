@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            {{-- onchange="cargar_torneos(this.value,2,<?php //echo $externo;
            ?>)"> --}}
            {{-- onchange="cargar_torneos(this.value,1,<?php //echo $externo
            ?>)" --}}
            <h1 class="">Ligas</h1>
            <select name="categoria">
                <option value="0" selected>Categorias</option>
                <option value="1">RFEF</option>
                <option value="4">Autonómica</option>
                <option value="5">Juvenil</option>
                <option value="7">Femenino</option>
                <option value="9">Europa</option>
                <option value="17">Fútbol Sala</option>
            </select>
        </div><!-- end col-->



        {{-- esto es para que muestres los directos agrupados --}}
        <div class="col">
            {{ $resultados }}

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
