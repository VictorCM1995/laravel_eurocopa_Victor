@extends('layouts.master')
@section('titulo')
    Eurocopa
@endsection
@section('contenido')
    <br><br><br><div class="row">
    	@foreach($arrayGrupos as $grupo)
    		<div class="col-xs-12 col-sm-6 col-md-4 " style="border:1px solid black">
    		    <h4>Grupo {{$grupo->nombre}}</h4>
    		    @foreach($grupo->paises as $pais)
    				<p>{{$pais->nombre}}-{{count($pais->partidos)}}</p>
    			@endforeach
    		</div>
    	@endforeach
    </div>
@endsection