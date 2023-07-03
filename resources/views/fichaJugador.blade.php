<x-layouts.app title="Ficha jugador" meta-description="ficha individual del jugador">

<?php $arrayPosiciones = array(
    '1'=>'Portero',
    '2'=>'Defensa',
    '3'=>'Medio Campo',
    '4'=>'Delantero'
);?>

<img src="https://futbolme.com/static/img/jugadores/jugador{{$datos[0]->idJugador}}.jpg" alt="{{ $datos[0]->nombreJugador }}">

Nombre: {{ $datos[0]->nombreJugador }}
<br>
Apodo: {{ $datos[0]->apodoJugador}}
<br>
Nacimiento: {{ $datos[0]->fecha_nacimiento_Jugador }}
<br>
Lugar de nacimiento: {{ $datos[0]->lugar_nacimiento_Jugador }}
<br>
Peso: {{ $datos[0]->pesoJugador }}Kg
<br>
Altura: {{ $datos[0]->alturaJugador }}m
<br>
<strong>{{ $arrayPosiciones[$datos[0]->posicionJugador] }}</strong>
<br>
Equipo Actual: <span class="underline">{{ $datos[0]->nombreEquipo}}</span>
<br>
<strong>PALMARÉS</strong>
<br>
<?php echo nl2br($datos[0]->palmaresJugador);?>

</x-layouts.app>