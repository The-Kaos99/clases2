@extends('administracion.layouts.plantilla')
@section('cabecera')
<?php
    $titulo='Creacion y Eliminacion de los Alumnos';
?>
@endsection
@section('contenido')
@include("administracion.create_alumno")
@include("administracion.list_alumno")
@endsection
@section('footer')
@endsection