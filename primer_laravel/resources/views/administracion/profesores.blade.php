@extends('administracion.layouts.plantilla')
@section('cabecera')
<?php
    $titulo='Creacion y Eliminacion de los Profesores';
?>
@endsection
@section('contenido')
@include("administracion.create_profe")
@include("administracion.list_profe")
@endsection
@section('footer')
@endsection