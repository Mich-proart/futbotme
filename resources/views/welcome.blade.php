<x-layouts.app title="Home" meta-description="Home page">

    <div class="col-lg-7 col-12 px-lg-4">
        <div class="container-fluid px-0">
            <div class="row row-cols-2 g-0 justify-content-between">
                <div class="col-lg-7 col-12 ">
                    <h2 class="fs-00 mb-4">Partidos para hoy: <span class="color-feature">En directo:
                            8</span> | Finalizados: 40 | Futuros: 40</h2>
                </div>
                <div class="col-lg-5 col-12">
                    <h4 class="fs-00 mb-4 text-lg-end">Actualizado: 16:45:52 </h4>
                </div>
                <div class="col-12">
                    <div class="container">
                        <div class="calendar-assets">
                            <button class="btn bth-hoy" onclick="resetDate()" title="Dia atual">
                                <i class="fas fa-calendar-day"></i> Hoy
                            </button>

                            <div class="day-assets d-flex align-items-center justify-content-between">
                                <button
                                    class="btn bg-gray br-0 px-4 py-2 d-flex align-items-center justify-content-between"
                                    onclick="prevDay()" title="Dia anterior">
                                    <i class=" bi bi-chevron-left fs-5"></i>
                                </button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="fs-00 mb-0" id="currentDate"></h2>
                                    <div class="field ps-2">
                                        <form class="form-input" id="date-search"
                                            onsubmit="return setDate(this)">
                                            <input type="date" class="text-field w-15" name="date"
                                                id="date" required>
                                            {{-- <button type="submit" class="btn btn-small"
                                                title="Pesquisar"><i class="bi bi-search"></i></button> --}}
                                        </form>
                                    </div>
                                </div>
                                <button
                                    class="btn bg-gray br-0 px-4 py-2 d-flex align-items-center justify-content-between"
                                    onclick="nextDay()" title="Próximo dia">
                                    <i class=" bi bi-chevron-right fs-5"></i>
                                </button>
                            </div>
                        </div>
                        <div class="calendar d-none" id="table">
                            <div class="header">
                                <div class="month" id="month-header">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 mb-5">
                    <button type="button" class="btn px-3 py-2 bg-brand-green text-white fs-00 me-3 mb-lg-0 mb-3">
                        Principal <span class="badge bg-feature va-middle">4</span>
                    </button>
                    <button type="button" class="btn px-3 py-2 color-black bg-silver-medium fs-00 me-3 mb-lg-0 mb-3">
                        3ª Federación <span class="badge bg-feature va-middle">1</span>
                    </button>
                    <button type="button" class="btn px-3 py-2 color-black bg-silver-medium fs-00 me-3 mb-lg-0 mb-3">
                        Autonómicas <span class="badge bg-feature va-middle">3</span>
                    </button>
                    <button type="button" class="btn px-3 py-2 color-black bg-silver-medium fs-00 me-3 mb-lg-0 mb-3">
                        Juveniles <span class="badge bg-feature va-middle">2</span>
                    </button>
                    <button type="button" class="btn px-3 py-2 color-black bg-silver-medium fs-00">
                        Europa <span class="badge bg-feature va-middle">4</span>
                    </button>
                </div>
                <div class="col px-0 mb-lg-5 mb-4">
                    <h2 class="fs-03 color-feature mb-0">LIVESCORE: 8</h2>
                </div>
                <div class="col px-0 text-end">
                    <button class="ms-auto btn-vocultos bg-silver-medium border-0 color-black fs-00">
                        <span class="icon-hidden d-inline-block fs-3 me-3"></span>
                        <span class="d-block">Ver ocultos(0)</span>
                    </button>
                </div>
            </div>
        </div>
        {{-- Partidos!! --}}
        <div class="container-fluid px-0 my-5">
            {{-- LIVESCORE --}}
            <div class="accordion" id="PartidosEnDirecto">
                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelsStayOpen-headingOne">

                        <div class="d-block py-2 px-4">
                            <span class="icon-resolve-filled">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </span>
                        </div>

                        <div class="py-2 col-lg-10 col">
                            <i class="bi bi-x-square fs-4 pe-2"></i>
                            <h3 class="d-inline-block color-black fs-01">Copa de S.M el Rey</h3>
                            <span>-</span>
                            <h4 class="fs-00 d-lg-inline-block">RFEF</h4>
                        </div>

                        <button class="accordion-button w-auto py-3 px-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                            aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body border-bottom">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                                    </div>

                                </div>
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">10’</span>
                                <div class="col-2">
                                    <span class="icon-TV d-inline-block fs-1 d-grid grid-center-xy"></span>
                                </div>

                            </div>
                            <div class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Real Madrid</h3>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelsStayOpen-headingTwo">

                        <div class="d-block py-2 px-4">
                            <span class="icon-resolve-filled">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </span>
                        </div>

                        <div class="py-2 col-lg-10 col">
                            <i class="bi bi-x-square fs-4 pe-2"></i>
                            <h3 class="d-inline-block color-black fs-01">Copa de S.M el Rey</h3>
                            <span>-</span>
                            <h4 class="fs-00 d-lg-inline-block">RFEF</h4>
                        </div>

                        <button class="accordion-button w-auto py-3 px-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                            aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                            <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body border-bottom">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                                    </div>

                                </div>
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">10’</span>
                                <div class="col-2">
                                    <span class="icon-TV d-inline-block fs-1 d-grid grid-center-xy"></span>
                                </div>

                            </div>
                            <div class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Real Madrid</h3>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">4</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">0</span>
                                </div>

                                <div class="visitante">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">FC Barcelona</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelsStayOpen-headingtree">

                        <div class="d-block py-2 px-4">
                            <span class="icon-resolve-filled">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </span>
                        </div>

                        <div class="py-2 col-lg-10 col">
                            <i class="bi bi-x-square fs-4 pe-2"></i>
                            <h3 class="d-inline-block color-black fs-01">Copa de S.M el Rey</h3>
                            <span>-</span>
                            <h4 class="fs-00 d-lg-inline-block">RFEF</h4>
                        </div>

                        <button class="accordion-button w-auto py-3 px-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetree"
                            aria-expanded="true" aria-controls="panelsStayOpen-collapsetree">
                            <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsetree" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingtree">
                        <div class="accordion-body border-bottom">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                                    </div>

                                </div>
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">74’</span>
                                <div class="col-2">
                                    <span class="icon-TV d-inline-block fs-1 d-grid grid-center-xy"></span>
                                </div>

                            </div>
                            <div class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">
                                        RCD Mallorca
                                    </h3>
                                    <div class="goleadores text-end">
                                        <span class="d-block">31´- Amh, 1-0</span>
                                    </div>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">1</span>
                                    <span class="fs-01 color-red">-</span>
                                    <span class="goles-visitante">3</span>
                                </div>

                                <div class="visitante">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">
                                        Athletic Club
                                    </h3>
                                    <div class="goleadores">
                                        <span class="d-block">35´- Iñaki Williams (pen.), 1-1</span>
                                        <span class="d-block">45´- Iñaki Williams, 1-2</span>
                                        <span class="d-block">90+5´- Iñaki Williams, 1-2</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            {{-- PUBLI --}}
            <div class="row my-4">
                <div class="col-12">
                    <div class="publi4"></div>
                </div>
            </div>

            {{-- FUTUROS Y FINALIZADOS --}}

            <div class="accordion" id="PartidosFuturos">
                <div class="accordion-item br-0">
                    <h2 class="accordion-header d-flex align-items-center justify-content-between"
                        id="panelFuturosOpen-headingOne">

                        <div class="d-block py-2 px-4">
                            <span class="icon-resolve-filled">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </span>
                        </div>

                        <div class="py-2 col-lg-10 col">
                            <i class="bi bi-x-square fs-4 pe-2"></i>
                            <h3 class="d-inline-block color-black fs-01">Supercoppa Italiana</h3>
                            <span>-</span>
                            <h4 class="fs-00 d-lg-inline-block">Italia</h4>
                        </div>

                        <button class="accordion-button w-auto py-3 px-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelFuturosOpen-collapseOne"
                            aria-expanded="true" aria-controls="panelFuturosOpen-collapseOne">
                            <i class="color-white bi bi-chevron-up fs-3"></i>
                        </button>
                    </h2>
                    <div id="panelFuturosOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelFuturosOpen-headingOne">
                        <div class="accordion-body border-bottom partido_futuro">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                                    </div>

                                </div>
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada 30</span>
                                <div class="col-2">
                                    <span class="icon-TV d-inline-block fs-1 d-grid grid-center-xy"></span>
                                </div>

                            </div>
                            <div class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Equipo 01 nombre sin
                                        cortes </h3>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">X</span>
                                    <span class="fs-01 va-top">-</span>
                                    <span class="goles-visitante">X</span>
                                </div>

                                <div class="visitante">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Equipo 02 nombre sin
                                        cortes </h3>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-body border-bottom partido_futuro">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-2 d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                                    </div>

                                </div>
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada 30</span>
                                <div class="col-2">
                                    <span class="icon-TV d-inline-block fs-1 d-grid grid-center-xy"></span>
                                </div>

                            </div>
                            <div class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Equipo 01 nombre sin
                                        cortes </h3>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">X</span>
                                    <span class="fs-01 va-top">-</span>
                                    <span class="goles-visitante">X</span>
                                </div>

                                <div class="visitante">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Equipo 02 nombre sin
                                        cortes </h3>
                                </div>
                            </div>

                        </div>

                        <div class="accordion-body border-bottom partido_finalizado">
                            <div class="d-flex aling-items-center justify-content-between ">
                                <div class="col-lg-2 col d-flex aling-items-center ">
                                    <div class="d-block py-2 px-1 fs-2">
                                        <span class="icon-resolve-filled">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="mx-4 hora d-inline-block mt-2 fw-bold">17:30</span>
                                    </div>

                                </div>
                                <span class="fs-00 d-grid grid-center-xy jornada_tiempo">Jornada 30</span>
                                <div class="col-lg-2 col">
                                    <span class="mx-4 hora d-inline-block mt-2 fw-bold">Finalizado</span>
                                </div>

                            </div>
                            <div class="row mx-0 row-cols-3 g-0 align-items-start justify-content-lg-center justify-content-between my-2">
                                <div class="local">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Equipo 01 nombre sin
                                        cortes </h3>
                                </div>

                                <div class="col-auto marcador px-lg-4 px-3">
                                    <span class="goles-local">0</span>
                                    <span class="fs-01 va-top">-</span>
                                    <span class="goles-visitante">3</span>
                                </div>

                                <div class="visitante">
                                    <i class="bi bi-shield"></i>
                                    <h3 class="d-inline-block color-black fs-01">Equipo 02 nombre sin
                                        cortes </h3>
                                    <div class="goleadores">
                                        <span class="d-block">0-1, Amath - 21´</span>
                                        <span class="d-block">0-2, Joan - 30´</span>
                                        <span class="d-block">1-3, Ronaldo - 55´</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
                

</x-layouts.app>
