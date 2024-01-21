<x-layouts.app title="Ficha equipo" meta-description="ficha individual del equipo">


    {{-- {{dd($teams)}} --}}

    {{-- #items: array:1 [▼
    0 => {#305 ▼
      +"idEquipo": 421
      +"nombreEquipo": "Athletic Club"
      +"nombreCompletoEquipo": "Athletic Club"
      +"nombreCortoEquipo": "Athletic Club"
      +"club_id_Equipo": 4443
      +"nombreCategoria": "Senior Masculino"
      +"fundadoEquipo": 1901
      +"debut_nacional_Equipo": 1928
      +"escudoEquipo": 500
      +"sexoEquipo": 1
      +"slugClub": "athletic-club"
      +"betsapiEquipo": 1210
      +"codigoRFEF_Equipo": "011"
      +"nombreEstadio": "San Mamés"
      +"estadioDireccion": "C/ Felipe Serrate s/n"
      +"estadioInauguracion": 2013
      +"estadioCapacidad": 53332
    }
  ] --}}

    <?php foreach ($teams as $team) { ?>
    <section class="header_cat p-4 my-3">
        <div class="container-fluid">
            <div class="row row-cols-3">
                <div class="col-auto escudo_equipo">
                    <img src="{{ asset('assets/images/img/club/escudo' . $team->club_id_Equipo) }}.png"
                        alt="escudo {{ $team->nombreEquipo }} " class="img-fluid">
                </div>
                <div class="col">
                    <h1 class="color-brand-green text-uppercase "> {{ $team->nombreEquipo }}</h1>
                    <h2>{{ $team->nombreCategoria }}</h2>
                </div>
                <div class="col">
                    {{-- <img class="img-fluid" src="{{ asset('assets/images/img/equipaciones/eq' . $team->equipacion_id) }}.png"  alt="Equipacion {{ $team->nombreEquipo }}" class="img-fluid"> --}}
                </div>
            </div>
        </div>

    </section>
    <section>
        <ul class="nav nav-pills mb-3 justify-content-lg-start justify-content-center pb-2" id="pills_tab_cat"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3 active" id="pills-datos-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-datos" type="button" role="tab"
                    aria-controls="pills-datos" aria-selected="true">Datos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-jornada-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-jornada" type="button" role="tab"
                    aria-controls="pills-jornada" aria-selected="false">Calendario</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-goleadores-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-goleadores" type="button" role="tab"
                    aria-controls="pills-goleadores" aria-selected="false">Clasificación</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-calendario-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-calendario" type="button" role="tab"
                    aria-controls="pills-calendario" aria-selected="false">Plantilla</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-fichajes-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-fichajes" type="button" role="tab"
                    aria-controls="pills-fichajes" aria-selected="false">Fichajes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn px-3 py-2 fw-semibold fs-00 me-3 mb-3" id="pills-equipo-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-equipo" type="button" role="tab"
                    aria-controls="pills-equipo" aria-selected="false">Equipo</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            {{-- TAB DATOS --}}
            <div class="tab-pane fade show active" id="pills-datos" role="tabpanel" aria-labelledby="pills-datos-tab">
                <div class="container-fluid p-4 bg-white br-6 mb-4">
                    <div class="row row-cols-lg-2">
                        <div class="col">
                            <h3>{{ $team->nombreEstadio }}</h3>
                            <p>{{ $team->estadioDireccion }} - {{-- {{ $teamProvincia[0]->nombreProvincia }} --}}</p>
                            <br>
                            <p>Año de inauguración: {{ $team->estadioInauguracion }}</p>
                            <p>Capacidad: {{ $team->estadioCapacidad }}</p>
                        </div>
                        <div class="col">
                            <img src="https://futbolme.com/static/img/estadios/estadi{{ $team->idEquipo }}.png"
                                alt="{{ $team->nombreEstadio }}">
                        </div>
                    </div>
                </div>

                <div class="container-fluid p-4 bg-white br-6">
                    <div class="row row-cols-lg-2">
                        <div class="col">
                            <h3>Datos del Club</h3>
                            <p>{{ $team->nombreCompletoEquipo }}</p>
                            <p>Fundado en {{ $team->fundadoEquipo }}</p>
                            <p>Equipación: </p>
                            <p>Web: </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TAB Calendario --}}
            <div class="tab-pane fade " id="pills-jornada" role="tabpanel" aria-labelledby="pills-jornada-tab">

                {{-- JORNADAS --}}
                <div class="jornadas_categorias mt-3 mb-5" id="jornadas_categorias">

                    <?php for ($i = 0; $i < 10; $i++) { ?>
                    <?php
                    /* $horabd = $partido->hora_prevista;
                    $HoraLimpia = substr($horabd, 0, -3); */ // Elimina los tres últimos caracteres :00
                    ?>
                    <div id="<?php echo $i + 1; ?>" class="PartidosFuturos bg-white p-lg-4 p-3 mb-2">
                        <div class="d-flex aling-items-center justify-content-between partido_futuro">
                            <div class="col d-flex aling-items-center ">
                                <div class="d-block py-2 px-1 fs-2">
                                    <span class="icon-resolve-filled">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </span>
                                </div>
                                <div>
                                    <span
                                        class="mx-4 hora minitos_partidos d-inline-block fw-semibold px-3 bg-gray-hora text-white">{{ $HoraLimpia }}</span>
                                </div>

                            </div>
                            <div class="col">
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada
                                    {{ $partido->jornada }}</span>
                            </div>
                            <div
                                class="col text-end mas_info_partido d-flex aling-items-center justify-content-end gap-4">
                                {{-- <span class="icon-alienacion d-inline-block fs-1"></span>
                                <span class="icon-ball d-inline-block fs-1"></span> --}}
                                <span class="icon-TV d-inline-block fs-1"></span>
                            </div>

                        </div>
                        <div class="mx-0 partido_alineado my-2">
                            <div class="local">
                                <h3 class="d-block">{{ $partido->local }}</h3>
                                <div class="escudo d-lg-inline-block d-none">
                                    {{-- <img src="{{ asset('assets/images/img/club/escudo' . $partido->equipoLocal_id) }}.png" class="logo_s img-fluid"> --}}
                                </div>
                                <div class="goleadores">
                                    <span class="d-block">{!! $goles_local !!}</span>
                                </div>
                            </div>

                            <div class="marcador">
                                <span class="goles-local color-red">

                                    <?php
                                    if ($partido->estado_partido !== 3) {
                                        echo $partido->goles_local;
                                    } else {
                                        if ($partido->goles_local == '0'):
                                            echo '-';
                                        else:
                                            echo $partido->goles_local;
                                        endif;
                                    }
                                    ?>
                                </span>
                                <span class="fs-01 color-red">-</span>
                                <span class="goles-visitante color-red">
                                    <?php
                                    
                                    if ($partido->estado_partido !== 3) {
                                        echo $partido->goles_visitante;
                                    } else {
                                        if ($partido->goles_visitante == '0'):
                                            echo '-';
                                        else:
                                            echo $partido->goles_visitante;
                                        endif;
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="visitante">
                                <div class="escudo d-lg-inline-block d-none">
                                    {{-- <img src="{{ asset('assets/images/img/club/escudo' . $partido->equipoVisitante_id) }}.png" class="logo_s img-fluid"> --}}
                                </div>
                                <h3 class="d-block">{{ $partido->visitante }}</h3>
                                <div class="goleadores">
                                    <span class="d-block">{!! $goles_visitante !!}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>



                </div>

            </div>

            <div class="tab-pane fade" id="pills-goleadores" role="tabpanel" aria-labelledby="pills-goleadores-tab">
                {{-- TAB DE Clasificación --}}
                <div class="mt-5 pt-lg-5 pt-4 table-responsive">
                    <table id="tabla_goleadores" class="table table-hover table-white border-light">
                        <thead>
                            <tr class="table-success">
                                <th scope="col"></th>
                                <th scope="col">Jugador</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Goles</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Ronaldinho</td>
                                <td>FC Barcelona</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Herrera</td>
                                <td>FC Barcelona</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ronaldo</td>
                                <td>Real Madrid</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-calendario" role="tabpanel" aria-labelledby="pills-calendario-tab">
                {{-- TAB DE Plantilla --}}

            </div>

            <div class="tab-pane fade" id="pills-fichajes" role="tabpanel" aria-labelledby="pills-fichajes-tab">
                {{-- FICHAJES --}}
                <div class="accordion accordion-flush" id="accordionFichajes">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-green-directo"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid"
                                        class="img-fluid">
                                    <span class="text-decoration-none fs-22px color-black fw-semibold"> Real
                                        Madrid</span>
                                </div>

                                <div class="indumentaria">
                                    <img src="https://futbolme.com//static/img/equipaciones/eq369.png" alt=""
                                        class="img-fluid">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body bg-white-light px-0">

                                {{-- jugadores --}}
                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-green-directo collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-22px color-black fw-semibold"> Real
                                        Madrid</span>
                                </div>

                                <div class="indumentaria">
                                    <img src="https://futbolme.com//static/img/equipaciones/eq369.png" alt=""
                                        class="img-fluid">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body bg-white-light px-0">
                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button
                                class="d-flex align-items-center justify-content-between accordion-button bg-green-directo collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                                <div class="escudo_nombre">

                                    <img src="https://assets.b365api.com/images/team/b/2829.png" alt="Real Madrid">
                                    <span class="text-decoration-none fs-22px color-black fw-semibold"> Real
                                        Madrid</span>
                                </div>

                                <div class="indumentaria">
                                    <img src="https://futbolme.com//static/img/equipaciones/eq369.png" alt=""
                                        class="img-fluid">
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFichajes">
                            <div class="accordion-body bg-white-light px-0">

                                <div class="d-flex align-items-center item-fichajes">
                                    <img src="https://futbolme.com/static/img/jugadores/jugador1105.jpg"
                                        alt="" class="img-fluid">
                                    <div class="ps-4">
                                        <h4 class="fs-01 fw-semibold color-black">Maxi</h4>
                                        <p class="fs-00 fw-medium">Procedencia: Celta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-equipo" role="tabpanel" aria-labelledby="pills-equipo-tab">
                {{-- TAB DE EQUIPO --}}
                <div class="container-fluid mt-5 pt-lg-5 pt-4">
                    <div class="row">

                    </div>
                </div>

            </div>


            {{-- <div class="tab-pane fade" id="pills-ascensos-descensos" role="tabpanel"
            aria-labelledby="pills-ascensos-descensos-tab">...</div>
        <div class="tab-pane fade" id="pills-golaverage" role="tabpanel" aria-labelledby="pills-golaverage-tab">
            ...
        </div> --}}
        </div>
    </section>
    <?php } ?>
</x-layouts.app>
