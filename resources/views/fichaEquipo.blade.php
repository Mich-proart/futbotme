{{-- <h1> ficha de equipo {{ $club }} con el id {{ $id }}</h1> --}}
{{-- {{ $teams }} --}}

<x-layouts.app title="Ficha equipo" meta-description="ficha individual del equipo">

<h1>{{ $teams[0]->nombreEquipo }}</h1>
<h3>{{ $teams[0]->nombreCategoria }}</h3>
<br>

{{ $teamEstadio }}

<h4>{{ $teamEstadio[0]->nombreEstadio }}</h4>

<p>{{ $teamEstadio[0]->estadioDireccion }} - {{ $teamProvincia[0]->nombreProvincia}}</p>
<p>Año de inauguración: {{ $teamEstadio[0]->estadioInauguracion }}</p>
<p>Capacidad: {{ $teamEstadio[0]->estadioCapacidad }}</p>
<img src="https://futbolme.com/static/img/estadios/estadi{{ $teams[0]->idEquipo }}.png" alt="{{ $teamEstadio[0]->nombreEstadio }}">

</x-layouts.app>