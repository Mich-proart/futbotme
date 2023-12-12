<x-layouts.app title="ASCENSOS, DESCENSOS Y PROMOCIONES" meta-description="ASCENSOS, DESCENSOS Y PROMOCIONES page">

    <h1 class="title_page my-lg-5 my-3">ASCENSOS, DESCENSOS Y PROMOCIONES</h1>
    {{-- {{dd($datos)}} --}}

    <div class="accordion accordion-flush" id="accordionAscensos">

        @foreach ($datos as $categoria => $categorias)

            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button
                        class="d-flex align-items-center justify-content-between accordion-button bg-brand-green text-white"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush_array_{{ $loop->iteration }}"
                        aria-expanded="false" aria-controls="flush_array_{{ $loop->iteration }}">
                        <div class="nombre">
                            <span class="text-decoration-none fs-22px fw-semibold">{{ $categoria }}</span>
                        </div>

                        <div class="d-block"><i class="bi bi-chevron-up fs-3"></i></div>
                    </button>
                </h2>
                <div id="flush_array_{{ $loop->iteration }}" class="accordion-collapse collapse show"
                    data-bs-parent="#accordionAscensos">
                    <div class="accordion-body px-0">
                        <div class="row row-cols-2">
                            @foreach ($categorias as $temporada => $temporadas)
                                <div class="col">


                                    <h2 class="subtitle_page bg-silver-medium p-4">{{ $temporada }}</h2>
                                    @foreach ($temporadas as $id => $item)
                                        <div class="items-equipos mt-4 mb-lg-5 mb-4 px-4">
                                            <h3 class="subtitle_page2">{{ $item->nombre }}</h3>

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item mb-3 border-0">
                                                    <div class="visitante">
                                                        <div class="escudo d-lg-inline-block d-none">
                                                            <img src="https://futbolme.com/static/img/estadios/estadi{{ $item->equipo_id }}.png"
                                                                class="logo_s img-fluid"
                                                                alt="Escudo de {{ $item->equipo }}">
                                                        </div>
                                                        <h3 class="d-block">{{ $item->equipo }}</h3>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @endforeach



    </div>

</x-layouts.app>
