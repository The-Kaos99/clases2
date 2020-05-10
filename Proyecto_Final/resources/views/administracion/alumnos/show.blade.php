@extends('administracion.layouts.plantilla')
@section('cabecera')
{{$titulo=$alumno->nombre." ".$alumno->apellidos}}
@endsection
@section('contenido')
<div class="row">
    <div class="col-12">
        <img src="{{ asset("images") }}/{{$alumno->imagen}}" class="rounded-circle mx-auto d-block" alt="" width="300" height="300">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3 class="text-center">{{$alumno->nombre}} {{$alumno->apellidos}}</h3>
    </div>
</div>
<div class="row">
    <div class="col-6 text-center">
    <p>Fecha de Nacimiento : {{$alumno->fech_nac}}</p>
    </div>
    <div class="col-6 text-center">
        <p>Curso y Grupo : {{$alumno->curso}} {{$alumno->grupo}}</p>
        </div>
</div>
<div class="row text-center">
    <div class="col-12">
        <a name="" id="" class="btn btn-primary" href="{{ url()->previous() }}" role="button">Volver</a>
    </div>
</div>


@endsection
@section('footer')
@endsection