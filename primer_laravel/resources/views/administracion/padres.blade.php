@extends('administracion.layouts.plantilla')
@section('cabecera')
<?php
    $titulo='Creacion y Eliminacion de los Padres de los alumnos';
?>
@endsection
@section('contenido')
@include("administracion.create_padres")
@include("administracion.list_padres")
@endsection
@section('footer')
@endsection