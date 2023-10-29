@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-sm-12">
            <!-- Profile -->
            <div class="card">
                <div class="card-body profile-user-box">
                    <div class="row">
                        <div class="col-12">
                            <div class="row align-items-start justify-center">
                                <div class="col-auto d-lg-block d-flex justify-between align-items-center mb-3">
                                    <div class="avatar-lg">
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                            class="rounded-circle img-thumbnail">
                                    </div>
                                    <div class="text-center mt-sm-2 mt-2 text-sm-end">
                                        <button type="button" class="btn btn-light">
                                            <i class="mdi mdi-account-edit me-1"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="row">
                                            <div class="col-xl-12 col-12 mb-3">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->nombre }}" value="{{ $dataJugador[0]->nombre }}">
                                            </div>
                                        
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Apellidos</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->apellidos }}" value="{{ $dataJugador[0]->apellidos }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Apodo</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->apodo }}" value="{{ $dataJugador[0]->apodo }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Posicion</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->posicion }}" value="{{ $dataJugador[0]->posicion }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Dorsal</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->dorsal }}" value="{{ $dataJugador[0]->dorsal }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Altura</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->altura }}" value="{{ $dataJugador[0]->altura }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Peso</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->peso }}" value="{{ $dataJugador[0]->peso }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Fecha nacimiento</label>
                                                <input type="date" class="form-control" placeholder="{{ $dataJugador[0]->fecha_nacimiento }}" value="{{ $dataJugador[0]->fecha_nacimiento }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Lugar nacimiento</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->lugar_nacimiento }}" value="{{ $dataJugador[0]->lugar_nacimiento }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Baja?</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->es_baja }}" value="{{ $dataJugador[0]->es_baja }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Fichaje?</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->es_fichaje }}" value="{{ $dataJugador[0]->es_fichaje }}">
                                            </div>
                                            <div class="col-xl-12 col-12 mb-3">
                                                <label for="jugador-select-pais" class="form-label">Pais</label>
                                                <select class="form-select" id="jugador-select-pais">
                                                    @foreach ( $paises as $pais )
                                                        <option value="{{ $pais->id }}" <?php echo ($pais->id == $dataJugador[0]->pais_id) ? 'selected' : '';?>>{{ $pais->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <ul class="mb-0 list-inline">
                                            <li class="list-inline-item me-3">
                                                <h5 class="mb-1">$ 25,184</h5>
                                                <p class="mb-0 font-13">Total Revenue</p>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 class="mb-1">5482</h5>
                                                <p class="mb-0 font-13">Number of Orders</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row -->
                </div> <!-- end card-body/ profile-user-box-->
            </div><!--end profile/ card -->
        </div> <!-- end col-->
    </div> <!-- end row-->
    <div class="row">
        <div class="col-xl-4">
            <!-- Personal-Information -->
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">Palmarés</h4>
                    <textarea  class="w-100" id="" cols="30" rows="10">
                        {{ $dataJugador[0]->palmares }}
                    </textarea>
                    <hr/>
                    <h4 class="header-title mt-0 mb-3">Características</h4>
                    <textarea class="w-100" name="" id="" cols="30" rows="10">
                        {{ $dataJugador[0]->caracteristicas }}
                    </textarea>
                    <div class="text-start">
                        <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">Michael A. Franklin</span></p>

                        <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">(+12) 123 1234 567</span></p>

                        <p class="text-muted"><strong>Email :</strong> <span class="ms-2">coderthemes@gmail.com</span></p>

                        <p class="text-muted"><strong>Location :</strong> <span class="ms-2">USA</span></p>

                        <p class="text-muted"><strong>Languages :</strong>
                            <span class="ms-2"> English, German, Spanish </span>
                        </p>
                        <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                            <a class="d-inline-block ms-2 text-muted" data-bs-placement="top" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" href="" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-placement="top" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" href="" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                            <a class="d-inline-block ms-2 text-muted" data-bs-placement="top" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" href="" title="Skype"><i class="mdi mdi-skype"></i></a>
                        </p>

                    </div>
                </div>
            </div>
            <!-- Personal-Information -->
        </div>

        <div class="col-xl-8">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card tilebox-one">
                        <div class="card-body">
                            <i class="dripicons-basket float-end text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                            <h2 class="m-b-20">1,587</h2>
                            <span class="badge bg-primary"> +11% </span> <span class="text-muted">From previous period</span>
                        </div> <!-- end card-body-->
                    </div> <!--end card-->
                </div><!-- end col -->

                <div class="col-sm-4">
                    <div class="card tilebox-one">
                        <div class="card-body">
                            <i class="dripicons-box float-end text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                            <h2 class="m-b-20">$<span>46,782</span></h2>
                            <span class="badge bg-danger"> -29% </span> <span class="text-muted">From previous period</span>
                        </div> <!-- end card-body-->
                    </div> <!--end card-->
                </div><!-- end col -->

                <div class="col-sm-4">
                    <div class="card tilebox-one">
                        <div class="card-body">
                            <i class="dripicons-jewel float-end text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                            <h2 class="m-b-20">1,890</h2>
                            <span class="badge bg-primary"> +89% </span> <span class="text-muted">Last year</span>
                        </div> <!-- end card-body-->
                    </div> <!--end card-->
                </div><!-- end col -->
            </div><!-- end row -->

            <!-- Toll free number box-->
            <div class="card text-white bg-success overflow-hidden">
                <div class="card-body">
                    <div class="toll-free-box text-center">
                        <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
            <!-- End Toll free number box-->
        </div>
    </div>
@endsection
