@extends('layouts.app')

@section('content')
    <style>
        table{
            font-family: Arial, sans-serif;
        }
        .container-fluid{
            width: 100%!important;
            max-width: 100%!important;
        }
    </style>
    <h1 class="mb-2 text-center">Partidos fecha {{ $diaActual }}</h1>
    <table class="mb-0 table table-hover" cellpadding="1" cellspacing="2" bgcolor="black" width="100%">
        <tbody>
        @foreach ($partidos as $key => $partido)
            <tr bgcolor="gainsboro">
                <td style="width: 80px;">{{$partido['id']}}</td>
                <td title="{{$partido['temporada_nombre']}}">{{$partido['temporada_nombre']}}</td>
                <td style="width: 60px;" align="center">{{$partido['hora_real']}}</td>
                <td style="width: 120px;" align="center">--</td>
                <td align="center" title="{{$partido['localCorto']}} - {{$partido['visitanteCorto']}}">{{$partido['localCorto']}} - {{$partido['visitanteCorto']}}</td>
                <td style="width: 90px;" align="center">{{$partido['goles_local']}} - {{$partido['goles_visitante']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
