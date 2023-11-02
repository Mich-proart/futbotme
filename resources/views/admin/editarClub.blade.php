@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h1>{{ $dataClub[0]->nombre }} - Club</h1>
        </div>
        <div class="col-12">
            <h2>equipos</h2>
            <ul>
                <li><a href="">equipo 1</a></li>
            </ul>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->nombre}}" value="{{ $dataClub[0]->nombre}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->nombre_completo}}" value="{{ $dataClub[0]->nombre_completo}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Localidad</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->localidad_id}}" value="{{ $dataClub[0]->localidad_id}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Patrocinador</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->patrocinador}}" value="{{ $dataClub[0]->patrocinador}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Presidente</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->presidente}}" value="{{ $dataClub[0]->presidente}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Socios</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->socios}}" value="{{ $dataClub[0]->socios}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Presupuesto</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->presupuesto}}" value="{{ $dataClub[0]->presupuesto}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Web</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->web}}" value="{{ $dataClub[0]->web}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->email}}" value="{{ $dataClub[0]->email}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Contacto</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->contacto}}" value="{{ $dataClub[0]->contacto}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Teléfono</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->telefono}}" value="{{ $dataClub[0]->telefono}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Dirección</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->direccion}}" value="{{ $dataClub[0]->direccion}}">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Otros datos de interés</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->observaciones}}" value="{{ $dataClub[0]->observaciones}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Fundado en</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->fundado}}" value="{{ $dataClub[0]->fundado}}">
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Desaparecido en</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->desaparecido}}" value="{{ $dataClub[0]->desaparecido}}">
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">¿Es selección?</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->es_seleccion}}" value="{{ $dataClub[0]->es_seleccion}}">
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Código RFEF</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->codigoRFEF}}" value="{{ $dataClub[0]->codigoRFEF}}">
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="mb-3">
                <label for="projectname" class="form-label">Territorial RFEF</label>
                <input type="text" class="form-control" placeholder="{{ $dataClub[0]->territorialRFEF}}" value="{{ $dataClub[0]->territorialRFEF}}">
            </div>
        </div>
        <div class="col-xl-4 col-12 mb-4">
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>



        
    </div>
@endsection
