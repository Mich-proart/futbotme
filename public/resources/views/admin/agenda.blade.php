@extends('layouts.app')

@section('content')

    <style>
        /* Reset de estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos del calendario */
        .calendario {
            font-family: Arial, sans-serif;
            margin: 20px 0px;
            width: 300px;
        }

        .text-cabecera {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            height: 50px;
        }

        td:not(.dia-actual):hover {
            background-color: #f0f0f0;
        }

        /* Estilos para el día actual */
        .dia-actual {
            background-color: #3498db;
            color: white;
        }
        .dia-actual p a{
            color: white;
        }
    </style>

    <!-- Botones para navegar entre meses -->
    <div class="content">
        <?php $mesAnterior = $mesActual == 1 ? 12 : $mesActual - 1;?>
        <?php $anioAnterior = $mesActual == 1 ? $anioActual - 1 : $anioActual;?>
        <?php $mesSiguiente = $mesActual == 12 ? 1 : $mesActual + 1;?>
        <?php $anioSiguiente = $mesActual == 12 ? $anioActual + 1 : $anioActual;?>
        <div class="cabecera-dias d-flex justify-content-between mt-4 py-3">
            <a class="text-cabecera" href="{{ url('/admin-panel/agenda/' . ($mesAnterior) . '/' . $anioAnterior) }}">Mes Anterior</a>
            <p class="text-cabecera mb-0">{{ $meses[$mesActual] }} / {{ $anioActual }}</p>
            <a class="text-cabecera" href="{{ url('/admin-panel/agenda/' . ($mesSiguiente) . '/' . $anioSiguiente) }}">Mes Siguiente</a>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mie</th>
                    <th>Jue</th>
                    <th>Vie</th>
                    <th>Sab</th>
                    <th>Dom</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calendario as $semana)
                    <tr>
                        @foreach ($semana  as $key => $dia)
                            <!-- Verificar si el día tiene datos en el array -->
                            @if (isset($datosArray[$dia['fecha']]))
                                <!-- Mostrar los datos correspondientes -->
                                <td class="{{ $dia['clase'] }}" style="vertical-align: baseline;">
                                    <div class="content-td d-flex flex-column-reverse">
                                        <div class="div-center">
                                            <?php $suma_Partido_dia = 0;?>
                                            @foreach ($datosArray[$dia['fecha']] as $partido)
                                                <?php $suma_Partido_dia = $suma_Partido_dia + $partido['partidos'];?>
                                                <p class="text-start"><a href="{{ url('/admin-panel/agenda/listado-agenda'. '/' . $partido['categoria_torneo_id'] . '/' . $dia['fecha']) }}">{{ $partido['nombre'] }} - {{ $partido['partidos'] }}</a></p>
                                            @endforeach
                                        </div>
                                        <div class="div-bottom d-flex justify-content-between">
                                            <p class="text-start">{{ $dia['numero'] }}</p>
                                            <p class="text-end text-danger mb-0"><?php echo $suma_Partido_dia;?> partidos</p>
                                        </div>
                                    </div>
                                </td>
                            @else
                                <!-- Si no hay datos, solo mostrar el número del día -->
                                <td>{{ $dia['numero'] }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
