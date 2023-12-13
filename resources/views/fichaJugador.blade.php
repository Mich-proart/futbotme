<x-layouts.app title="Ficha jugador" meta-description="ficha individual del jugador">

    <?php $arrayPosiciones = [
        '1' => 'Portero',
        '2' => 'Defensa',
        '3' => 'Medio Campo',
        '4' => 'Delantero',
    ]; ?>

    <div class="row mt-lg-5 pt-lg-5 pb-lg-5 mb-lg-5 mt-5">
        <div class="col-lg-5 col-12">
            <h1 class="bg-brand-green text-white w-100 py-3 mb-4 px-3 d-lg-none d-block">
                <strong>{{ $datos[0]->nombreJugador }}</strong></h1>
            <div class="content-img-jugador" style="border-radius: 6px;">
                <img class="img-fluid"
                    src="https://futbolme.com/static/img/jugadores/jugador{{ $datos[0]->idJugador }}.jpg"
                    alt="{{ $datos[0]->nombreJugador }}">
            </div>
        </div>
        <div class="col-lg-7 col-12 mb-lg-0 mb-5">
            <h1 class="bg-brand-green text-white w-100 py-3 mb-4 px-3 d-lg-block d-none">
                <strong>{{ $datos[0]->nombreJugador }}</strong></h1>
            <div class="content-datos-ficha-jugador px-3">
                <p class="color-gray-medium fs-4">Apodo: <span
                        class="fw-bold color-black">{{ $datos[0]->apodoJugador }}</span></p>
                <p class="color-gray-medium fs-4">Nacimiento: <span
                        class="fw-bold color-black">{{ $datos[0]->fecha_nacimiento_Jugador }}</span></p>
                <p class="color-gray-medium fs-4">Lugar de nacimiento: <span
                        class="fw-bold color-black">{{ $datos[0]->lugar_nacimiento_Jugador }}</span></p>
                <p class="color-gray-medium fs-4">Peso: <span
                        class="fw-bold color-black">{{ $datos[0]->pesoJugador }}Kg</span></p>
                <p class="color-gray-medium fs-4">Altura: <span
                        class="fw-bold color-black">{{ $datos[0]->alturaJugador }}m</span></p>
                <p class="color-gray-medium fs-4"><strong>{{ $arrayPosiciones[$datos[0]->posicionJugador] }}</strong>
                </p>
                <p class="color-gray-medium fs-4">Equipo Actual: <span
                        class="underline">{{ $datos[0]->nombreEquipo }}</span></p>
            </div>
        </div>
        <div class="col-12 mt-4">
            <h2 class="color-black fs-3">PALMARÉS</h2>
            <p class="color-gray-medium fs-4"><?php echo nl2br($datos[0]->palmaresJugador); ?></p>
        </div>
    </div>

</x-layouts.app>
