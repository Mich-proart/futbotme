@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-2">
            {{-- onchange="cargar_torneos(this.value,2,<?php //echo $externo; ?>)"> --}}
            <h2 class="mt-0">Torneos</h2>
            <select attr-tipo-competicion="2" class="reset-select disparador-competicion w-100 me-3">
                <option value="0" selected>Categorias</option>
                <option value="1">RFEF</option>
                <option value="2">FIFA</option>
                <option value="3">UEFA</option>
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
    </div> <!-- end row-->
@endsection
