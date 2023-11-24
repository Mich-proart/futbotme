@extends('layouts.app')

@section('content')
    {{--  <div class="row mt-5">
        <div class="col-12">
            <h1>Jugadores</h1>
        </div><!-- end col-->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="fixed-columns-datatable-jugadores" class="table table-striped nowrap row-border order-column w-100">
                        <thead>
                            <tr>
                                <th>id Jugador</th>
                                <th>Nombre</th>
                                <th>Apodo</th>
                                <th>Posición</th>
                                <th>Sexo</th>
                                <th>Fecha nacimiento</th>
                                <th>Lugar nacimiento</th>
                                <th>Equipo actual</th>
                                <th>Caracteristicas</th>
                            </tr>
                        </thead>
                        -- llenamos la tabla por medio de ajax --
                        <tbody></tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row--> --}}
    <div class="d-none d-md-block">
        <!--  ARTÍCULO 1: JUGADOR  -->
        <div class="bg-white my-4 rounded container p-4">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="/rodrygo.jpg" alt="Rodrygo Silva de Goes" class="bg-secondary rounded img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="flex-column justify-content-center ficha-uno">
                        <h2
                            class="mb-2 ps-3 d-flex justify-content-start align-items-center text-uppercase text-nowrap bg-success text-white nombre-jugador">
                            rodrygo silva de goes
                        </h2>
                        <div class="flex-column ficha-1">
                            <div class="mb-3 mt-2 ms-3 fs-6 p-normal">
                                <p>Nombre: <strong>Rodrygo Silva de Goes</strong></p>
                                <p>Apodo: <strong>Rodrygo</strong></p>
                                <p>Nacimiento: <strong>09/01/2001</strong></p>
                                <p>Lugar de nacimiento: <strong>Osasco (Brasil)</strong></p>
                                <p>Peso: <strong>70kg</strong></p>
                                <p>Altura: <strong>1.73m</strong></p>
                            </div>
                            <div class="ms-3 fs-6 p-normal">
                                <p><strong>Delantero</strong></p>
                                <p>Equipo actual<a href="#"
                                        class="fw-bolder ms-2 text-decoration-none text-secondary border-bottom border-secondary">Real
                                        Madrid CF</a></p>
                                <!-- No he podido lograr que el subrayado del texto sea gris, asi que directamente lo quite -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Datos equipos en los que estuvo  -->
            <div class="pt-3">
                <p class="text-uppercase fs-6 mt-2 mb-2"><strong>Palmarés</strong></p>
                <div class="mt-2 trayectoria-div">
                    <p>Real Madrid (19-?)</p>
                    <p>Real Madrid Castilla (19-20)</p>
                    <p>Santos (16-19)</p>
                </div>
                <div class="mt-3 trayectoria-div">
                    <p>1 Liga de Campeones</p>
                    <p>2 Ligas Españolas</p>
                    <p>2 Supercopas Españolas</p>
                </div>
            </div>
        </div>
        <!--  ARTÍCULO 2: PARTIDOS  -->
        <div class="bg-white rounded my-4 container p-4">
            <div class="d-flex justify-content-start align-items-center carac">
                <h2 class="text-success carac-goles">CARACTERÍSTICAS</h2>
                <h3 class="text-secondary carac-goles">Goles</h3>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Real Madrid CF <strong>2-1</strong> Mallorca</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Sevilla <strong>2-1</strong> Real Madrid CF</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Real Madrid CF <strong>2-1</strong> Real Betis Balompie</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>2</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Real Madrid CF <strong>2-1</strong> Mallorca</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Sevilla <strong>2-1</strong> Real Madrid CF</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Real Madrid CF <strong>2-1</strong> Mallorca</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center mb-1">
                    <p class="partido my-1 me-1">Sevilla <strong>2-1</strong> Real Madrid CF</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>
        </div>
    </div>

    <!--  VERSIÓN PARA DISPOSITIVOS MÓVILES  -->
    <div class="container d-md-none">

        <!--  ARTÍCULO 1: JUGADOR  -->
        <div class="bg-white rounded my-4 container p-4 articulo-movil">
            <h2
                class="mb-3 d-flex justify-content-center align-items-center text-uppercase text-nowrap bg-success text-white nombre-jugador">
                rodrygo silva de goes
            </h2>
            <div class="d-flex justify-content-start align-items-end">
                <div>
                    <img src="/rodrygo.jpg" alt="Rodrygo Silva de Goes" class="bg-secondary rounded img-movil mr-2">
                </div>
                <div class="ms-2 p-movil">
                    <p class="delantero"><strong>Delantero</strong></p>
                    <p class="equipo-actual">Equipo actual</p>
                    <p class="mb-0 equipo"><a href="#"
                            class="text-secondary text-decoration-none fw-bolder border-bottom border-secondary">Real Madrid
                            CF</a></p>
                </div>
            </div>
            <div class="mt-3 p-movil-datos">
                <p>Nombre: <strong>Rodrygo Silva de Goes</strong></p>
                <p>Apodo: <strong>Rodrygo</strong></p>
                <p>Nacimiento: <strong>09/01/2001</strong></p>
                <p>Lugar de nacimiento: <strong>Osasco (Brasil)</strong></p>
                <p>Peso: <strong>70kg</strong></p>
                <p>Altura: <strong>1.73m</strong></p>
            </div>
            <!--  Datos equipos en los que estuvo  -->
            <div>
                <p class="text-uppercase fs-6 mt-2 mb-2"><strong>Palmarés</strong></p>
                <div class="mt-2 trayectoria-div">
                    <p>Real Madrid (19-?)</p>
                    <p>Real Madrid Castilla (19-20)</p>
                    <p>Santos (16-19)</p>
                </div>
                <div class="mt-2 trayectoria-div">
                    <p>1 Liga de Campeones</p>
                    <p>2 Ligas Españolas</p>
                    <p>2 Supercopas Españolas</p>
                </div>
            </div>
        </div>

        <!--  ARTÍCULO 2: PARTIDOS  -->
        <div class="bg-white rounded my-4 container p-4 articulo-movil">
            <div class="d-flex justify-content-start align-items-center carac">
                <h2 class="text-success carac-goles">CARACTERÍSTICAS</h2>
                <h3 class="text-secondary carac-goles">Goles</h3>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Real Madrid CF <strong>2-1</strong> Mallorca</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Real Madrid CF <strong>2-1</strong> Real Betis Balompie</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>2</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Sevilla <strong>2-1</strong> Real Madrid CF</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Real Madrid CF <strong>2-1</strong> Mallorca</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Sevilla <strong>2-1</strong> Real Madrid CF</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Real Madrid CF <strong>2-1</strong> Mallorca</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>

            <div class="ms-1 ps-1 partido-jornada">
                <div class="d-flex flex-row align-items-center justify-content-between mb-1">
                    <p class="partido-movil my-1 me-1">Sevilla <strong>2-1</strong> Real Madrid CF</p>
                    <p class="ms-1 my-auto jornada">Jornada 4</p>
                </div>
                <div class="d-flex flex-row gol justify-content-center">
                    <p class="mx-1 my-0"><strong>1</strong>-1</p>
                    <p class="mx-1 my-0">Rodrygo - 65'</p>
                </div>
            </div>
        </div>
    </div>
@endsection
