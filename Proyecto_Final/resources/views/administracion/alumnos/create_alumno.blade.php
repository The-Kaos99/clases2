<div class="row pb-5">
    <div class="col-12">
        <h2 class="text-center">Creacion del Alumnado</h2>
    </div>
</div>
<div class="row pb-5">
    <div class="col-1"></div>
    <div class="col-10 opacidad-0">
        <form action="/admin/alumnos" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                <label for="fech_nac">Fecha   de Naciminento</label>
                <input type="date" class="form-control" name="fech_nac" id="fech_nac" aria-describedby="fech_nac"
                    required>
            </div>
            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" class="form-control" name="curso" id="curso" aria-describedby="curso"
                    placeholder="Curso del Alumno" required>
            </div>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input type="text" class="form-control" name="grupo" id="grupo" aria-describedby="grupo"
                    placeholder="Grupo del Alumno" required>
            </div>
            <div class="form-group">
                <label for="img_alumno">Imagen del Alumno</label>
                <input type="file" class="form-control pb-5 pt-3" name="img_alumno" id="img_alumno"
                    aria-describedby="img_alumno">
            </div>
            <button type="submit" class="btn btn-success" >Crear Alumno</button>
        </form>
        <div class="col-1"></div>
    </div>
</div> 