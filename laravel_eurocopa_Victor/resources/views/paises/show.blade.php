@extends('layouts.master')
@section('titulo')
    Eurocopa
@endsection
@section('contenido')
	<br><br><br><div class="row">
		<div class="col-sm-9">
			<h1>{{$pais->nombre}}( puntos)</h1>
			<h4>Partidos:</h4>
			<div>
				<button type="button" class="btn btn-success"><a href="">Jugar partido</a></button>
			</div>
			<div></div>
			<div>
				<button type="button" class="btn btn-light"><a href="">Jugar partido</a></button>
			</div>
			<h4>Jugadores</h4>
			@foreach($pais->jugadores as $jugador)
                <p>{{$jugador->numeroCamiseta}},{{$jugador->nombre}},{{$jugador->posicion}},{{$jugador->edad()}}</p>
            @endforeach
		</div>
	</div> 
@endsection