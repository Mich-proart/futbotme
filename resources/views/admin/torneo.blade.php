@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            {{-- onchange="cargar_torneos(this.value,2,<?php echo $externo; ?>)"> --}}
            <h1 class="">Torneos</h1>
            <select name="categoria">
                <option value="0" selected>Categorias</option>
                <option value="1">RFEF</option>
                <option value="2">FIFA</option>
                <option value="3">UEFA</option>
                <option value="4">Autonómica</option>
                <option value="5">Juvenil</option>
                <option value="7">Femenino</option>
                <option value="9">Europa</option>
                <option value="17">Fútbol Sala</option>
            </select>
            {{ $resultados }}
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
