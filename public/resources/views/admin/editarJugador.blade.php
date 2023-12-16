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
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Procedencia</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->equipoProcedencia_id }}" value="{{ $dataJugador[0]->equipoProcedencia_id }}">
                                            </div>
                                            <div class="col-xl-4 col-12 mb-3">
                                                <label class="form-label">Equipo actual</label>
                                                <input type="text" class="form-control" placeholder="{{ $dataJugador[0]->equipoActual_id }}" value="{{ $dataJugador[0]->equipoActual_id }}">
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
        <div class="col-12">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="card tilebox-one">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Palmarés</h4>
                            <textarea  class="w-100" id="" cols="30" rows="10">
                                {{ $dataJugador[0]->palmares }}
                            </textarea>
                        </div> <!-- end card-body-->
                    </div> <!--end card-->
                </div><!-- end col -->

                <div class="col-sm-6 col-12">
                    <div class="card tilebox-one">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Características</h4>
                            <textarea class="w-100" name="" id="" cols="30" rows="10">
                                {{ $dataJugador[0]->caracteristicas }}
                            </textarea>
                        </div> <!-- end card-body-->
                    </div> <!--end card-->
                </div><!-- end col -->
            </div><!-- end row -->

            <!-- Toll free number box-->
            <div class="card text-white bg-success overflow-hidden">
                <div class="card-body">
                    <div class="toll-free-box text-center">
                        <h4> <i class="mdi mdi-deskphone"></i> Futbolme - © 1999-2023</h4>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
            <!-- End Toll free number box-->
        </div>
    </div>
@endsection
