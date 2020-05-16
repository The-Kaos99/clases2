<div class="row pb-5">
    <div class="col-12">
        <h2 class="text-center">Creacion del Alumnado</h2>
    </div>
</div>



<div class="row pb-5">
    <div class="col-1"></div>
    <div class="col-10 opacidad-0">
       {!! Form::open(['action'=>'AlumnosController@store' , 'method'=>'POST' , 'file'=>true ,'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::label('nombre_alumno', 'Nombre del Alumno') !!}
                {!! Form::text('nombre_alumno', null , ['class'=>'form-control' , 'placeholder'=>"Nombre del Alumno" , 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('apellidos_alumno', 'Apellidos del Alumno') !!}
                {!! Form::text('apellidos_alumno', null , ['class'=>'form-control' , 'placeholder'=>"Apellidos del Alumno" , 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('fech_nac', 'Fecha de Nacimiento') !!}
                {!! Form::date('fech_nac', null, ['class'=>'form-control', 'required'] )!!}
            </div>
            <div class="form-group">
                {!! Form::label('unidad', 'Unidad del Alumno') !!}
                {!! Form::text('unidad', null , ['class'=>'form-control' , 'placeholder'=>"Unidad del Alumno" , 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('curso', 'Curso') !!}
                {!! Form::text('curso', null , ['class'=>'form-control' , 'placeholder'=>"curso" , 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('img_alumno', 'Imagen del Alumno') !!}
                {!! Form::file('img_alumno' , ['class'=>'form-control pb-5 pt-3' ,  'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Crear Alumno', ['class'=>'btn btn-success ']) !!}
            </div>

        {!! Form::close() !!}
        <!--
        <form action="/admin/alumnos" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
            <div class="form-group">
                <label for="nombre_alumno">Nombre del Alumno</label>
                <input type="text" class="form-control" name="nombre_alumno" id="nombre_alumno"
                    aria-describedby="nombre_alumno" placeholder="Nombre del Alumno" required>
            </div>
            <div class="form-group">
                <label for="apellidos_alumno">Apellidos del Alumno</label>
                <input type="text" class="form-control" name="apellidos_alumno" id="apellidos_alumno"
                    aria-describedby="apellidos_alumno" placeholder="Apellidos del Alumno" required>
            </div>
            <div class="form-group">
                <label for="fech_nac">Fecha de Naciminento</label>
                <input type="date" class="form-control" name="fech_nac" id="fech_nac" aria-describedby="fech_nac"
                    required value="2020-01-01">
            </div>
            <div class="form-group">
                <label for="unidad">Unidad</label>
                <input type="text" class="form-control" name="unidad" id="unidad" aria-describedby="unidad"
                    placeholder="Unidad del Alumno" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" class="form-control" name="curso" id="curso" aria-describedby="curso"
                    placeholder="Curso del Alumno">
            </div>
            <div class="form-group">
                <label for="img_alumno">Imagen del Alumno</label>
                <input type="file" class="form-control pb-5 pt-3" name="img_alumno" id="img_alumno"
                    aria-describedby="img_alumno" required>
            </div>
            <button type="submit" class="btn btn-success" >Crear Alumno</button>
        </form>-->
        <div class="col-1"></div>
    </div>
</div> 