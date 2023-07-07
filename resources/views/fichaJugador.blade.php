<x-layouts.app title="Ficha jugador" meta-description="ficha individual del jugador">

<?php $arrayPosiciones = array(
    '1'=>'Portero',
    '2'=>'Defensa',
    '3'=>'Medio Campo',
    '4'=>'Delantero'
);?>

<div class="row mt-lg-5 pt-lg-5 pb-lg-5 mb-lg-5 mt-5">
    <div class="col-lg-5 col-12">
        <div class="content-img-jugador" style="width: 150px;height: 220px;border-radius: 6px;">
            <img class="w-100" src="https://futbolme.com/static/img/jugadores/jugador{{$datos[0]->idJugador}}.jpg" alt="{{ $datos[0]->nombreJugador }}">
        </div>
    </div>
    <div class="col-lg-7 col-12 mb-lg-0 mb-5">
        <h1><strong>{{ $datos[0]->nombreJugador }}</strong></h1>
        <div class="content-datos-ficha-jugador">
            <p>Apodo: {{ $datos[0]->apodoJugador}}</p>
            <p>Nacimiento: {{ $datos[0]->fecha_nacimiento_Jugador }}</p>
            <p>Lugar de nacimiento: {{ $datos[0]->lugar_nacimiento_Jugador }}</p>
            <p>Peso: {{ $datos[0]->pesoJugador }}Kg</p>
            <p>Altura: {{ $datos[0]->alturaJugador }}m</p>
            <p><strong>{{ $arrayPosiciones[$datos[0]->posicionJugador] }}</strong></p>
            <p>Equipo Actual: <span class="underline">{{ $datos[0]->nombreEquipo}}</span></p>
        </div>
    </div>
    <div class="col-12">
        <p><strong>PALMARÉS</strong></p>    
        <p><?php echo nl2br($datos[0]->palmaresJugador);?></p>        
    </div>
</div>

</x-layouts.app>