@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-2">
            <h2 class="mt-0">Paises</h2>
            <select class="disparador-paises w-100 me-3">
                <option value="0" selected>paises</option>
                @foreach ($paises as $key => $pais)
                    <option value="{{ $pais->id }}" data-nombre="{{ $pais->nombre }}">{{ $pais->nombre }}</option>
                @endforeach
            </select>
        </div><!-- end col-->

        <div class="col-lg-10 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="fixed-columns-datatable-clubes-paises"
                        class="table table-striped nowrap row-border order-column w-100">
                        <thead>
                            <tr>
                                <th>idClub</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        {{-- llenamos la tabla por medio de ajax --}}
                        <tbody></tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
    </div> <!-- end row-->
@endsection
