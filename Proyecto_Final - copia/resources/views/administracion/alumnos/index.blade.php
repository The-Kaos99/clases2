@extends('administracion.layouts.plantilla')
@section('cabecera')
<?php
    $titulo='Creacion y Eliminacion de los Alumnos';
?>
@endsection
@section('contenido')
<h1></h1>
@include("administracion.alumnos.create_alumno")
@include("administracion.alumnos.list_alumno")
@endsection
@section('footer')
@endsection