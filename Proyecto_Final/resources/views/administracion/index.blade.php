@extends('administracion.layouts.plantilla')


@section('cabecera')
<?php
    $titulo='Administracion';
?>
@endsection
@section('contenido')
        <div class="row ">
            <div class="col-12 ">
                <h1 class="text-center">Bienvenido</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
               <p>En este apartado de la plataforma podra realizar diversas acciones generales y tambien en cada usuarios en particular </p>
               <ul>
                   <li>
                       Creacion , elimnacion y edicion del profesorado 
                   </li>
                   <li>
                        Creacion , elimnacion y edicion del alumnado
                    </li>
                    <li>
                        Creacion , elimnacion y edicion de los padres de los alumnos
                    </li>
                    <li>
                        Creacion , elimnacion y edicion de los administradores
                    </li>
                    <li>
                        Eliminacion completa de Profesores
                    </li>
                    <li>
                        Eliminacion completa de Alumnos
                    </li>
                    <li>
                        Eliminacion completa de los tutores de los alumnos
                    </li>
               </ul>
               <p>A continacion tendra un panel de control general para la gestion de la plataforma</p>
               <p>Los Administradores tendran que ser eliminados manualmente</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 mt-3" ><h4>Eliminacion de todos los Datos</h4></div>
            <div class="col-6">
                {!! Form::open(['action'=>['AdministracionController@deleteAll',] , 'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar Datos', ['class'=>"btn btn-danger mb-3 p-3 border border-dark"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 text-center"><h2>Creacion de administradores</h2></div>            
        </div>

    
@endsection
@section('footer')

@endsection
           
   