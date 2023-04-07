<x-layouts.app title="Home" meta-description="Home page">

    <section class="py-5 bg-white-light">
        <div class="container-fluid container-fluid-custom">
            <div class="row">
                <div class="col-lg-auto col-12 mb-lg-0 mb-4">
                    <div class="publi2"></div>
                </div>
                <div class="col-lg-7 col-12 px-lg-4">
                    <div class="container-fluid">
                        <div class="row row-cols-2 ">
                            <div class="col px-0">
                                <h2 class="fs-00 mb-4">LIVESCORE: 8</h2>
                                <div class="d-flex aling-items-center">
                                    <h2 class="fs-01 fw-bold color-brand-green mb-0">PARTIDOS EN DIRECTO</h2>
                                    <button class="ms-4 btn-vocultos bg-silver border-0 color-gray-contrast fs-00">Ver
                                        ocultos(0)</button>
                                </div>
                            </div>
                            <div class="col px-0 text-end">
                                <h2 class="fs-00 mb-4">Actualizado: 16:45:52 </h2>
                                <p>
                                    <input type="datetime-local" id="datetime-local">
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- Partidos!! --}}
                    <div class="container-fluid px-0 my-5">
                        <div class="accordion" id="PartidosEnDirecto">
                            <div class="accordion-item br-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button justify-content-between p-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        <div class="d-lg-flex aling-items-center justify-content-between py-3 ps-4">
                                            <span class="circle_fuera">
                                                <span class="circle_dentro"></span>
                                            </span>
                                            <h4 class="ps-4 fs-00 d-lg-block d-none">RFEF</h4>
                                        </div>

                                        <div class="py-3">
                                            <i class="bi bi-x-square fs-4 pe-2"></i>
                                            <h3 class="d-inline-block color-black fs-01">Copa de S.M el Rey</h3>
                                        </div>

                                        <div class="py-3 px-4 bg-greengris">
                                            <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                                        </div>

                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body d-lg-flex align-items-center justify-content-between">
                                        <div class="d-flex aling-items-center justify-content-between ">
                                            <div class="d-block">
                                                <span class="circle_fuera">
                                                    <span class="circle_dentro"></span>
                                                </span>
                                            </div>
                                            <span class="mx-4 hora">17:30</span>
                                            <span class="color-brand-green fs-00">1T - 10’</span>
                                            <i class="bi bi-tv d-lg-none d-inline-block fs-4"></i>
                                        </div>
                                        <div class="w-custom d-flex align-items-center justify-content-between">
                                            <div class="local">
                                                <i class="bi bi-shield"></i>
                                                <h3 class="d-inline-block color-black fs-01">Real Madrid</h3>
                                            </div>

                                            <div>
                                                <span class="goles-local">4</span>
                                                <span class="fs-01 color-red">-</span>
                                                <span class="goles-visitante">0</span>
                                            </div>

                                            <div class="visitante">
                                                <i class="bi bi-shield"></i>
                                                <h3 class="d-inline-block color-black fs-01">FC Barcelona</h3>
                                            </div>
                                        </div>

                                        <div class="streming d-lg-block d-none">
                                            <i class="bi bi-tv fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item br-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button justify-content-between p-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                        <div class="d-lg-flex aling-items-center justify-content-between py-3 ps-4">
                                            <span class="circle_fuera">
                                                <span class="circle_dentro"></span>
                                            </span>
                                            <h4 class="ps-4 fs-00 d-lg-block d-none">RFEF</h4>
                                        </div>

                                        <div class="py-3">
                                            <i class="bi bi-x-square fs-4 pe-2"></i>
                                            <h3 class="d-inline-block color-black fs-01">Copa de S.M el Rey</h3>
                                        </div>

                                        <div class="py-3 px-4 bg-greengris">
                                            <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                                        </div>

                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body d-lg-flex align-items-center justify-content-between">
                                        <div class="d-flex aling-items-center justify-content-between ">
                                            <div class="d-block">
                                                <span class="circle_fuera">
                                                    <span class="circle_dentro"></span>
                                                </span>
                                            </div>
                                            <span class="mx-4 hora">17:30</span>
                                            <span class="color-brand-green fs-00">1T - 10’</span>
                                            <i class="bi bi-tv d-lg-none d-inline-block fs-4"></i>
                                        </div>
                                        <div class="w-custom d-flex align-items-center justify-content-between">
                                            <div class="local">
                                                <i class="bi bi-shield"></i>
                                                <h3 class="d-inline-block color-black fs-01">Real Madrid</h3>
                                            </div>

                                            <div>
                                                <span class="goles-local">4</span>
                                                <span class="fs-01 color-red">-</span>
                                                <span class="goles-visitante">0</span>
                                            </div>

                                            <div class="visitante">
                                                <i class="bi bi-shield"></i>
                                                <h3 class="d-inline-block color-black fs-01">FC Barcelona</h3>
                                            </div>
                                        </div>

                                        <div class="streming d-lg-block d-none">
                                            <i class="bi bi-tv fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item br-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button justify-content-between p-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                        <div class="d-lg-flex aling-items-center justify-content-between py-3 ps-4">
                                            <span class="circle_fuera">
                                                <span class="circle_dentro"></span>
                                            </span>
                                            <h4 class="ps-4 fs-00 d-lg-block d-none">RFEF</h4>
                                        </div>

                                        <div class="py-3">
                                            <i class="bi bi-x-square fs-4 pe-2"></i>
                                            <h3 class="d-inline-block color-black fs-01">Copa de S.M el Rey</h3>
                                        </div>

                                        <div class="py-3 px-4 bg-greengris">
                                            <i class="color-gray-medium bi bi-chevron-up fs-3"></i>
                                        </div>

                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body d-lg-flex align-items-center justify-content-between">
                                        <div class="d-flex aling-items-center justify-content-between ">
                                            <div class="d-block">
                                                <span class="circle_fuera">
                                                    <span class="circle_dentro"></span>
                                                </span>
                                            </div>
                                            <span class="mx-4 hora">17:30</span>
                                            <span class="color-brand-green fs-00">1T - 10’</span>
                                            <i class="bi bi-tv d-lg-none d-inline-block fs-4"></i>
                                        </div>
                                        <div class="w-custom d-flex align-items-center justify-content-between">
                                            <div class="local">
                                                <i class="bi bi-shield"></i>
                                                <h3 class="d-inline-block color-black fs-01">Real Madrid</h3>
                                            </div>

                                            <div>
                                                <span class="goles-local">4</span>
                                                <span class="fs-01 color-red">-</span>
                                                <span class="goles-visitante">0</span>
                                            </div>

                                            <div class="visitante">
                                                <i class="bi bi-shield"></i>
                                                <h3 class="d-inline-block color-black fs-01">FC Barcelona</h3>
                                            </div>
                                        </div>

                                        <div class="streming d-lg-block d-none">
                                            <i class="bi bi-tv fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-auto col-12">
                    <div class="publi3"></div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
