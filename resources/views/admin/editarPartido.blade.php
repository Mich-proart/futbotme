@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-center">
                {{ $dataEquipoLocal[0]->nombreCorto}} vs {{ $dataEquipoVisitante[0]->nombreCorto}}
            </h1>
            @dump($medioPartido)
            @dump($datosPartido)
            @dump($medios)
        </div>
    </div> <!-- end row-->
@endsection
