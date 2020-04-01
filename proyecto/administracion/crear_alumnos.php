<div class="row ">
    <div class="col-12">
        <h3>Crear Alumnos</h3>
    </div>
</div>
<div class="row pb-5">
    <div class="col-12">
        <form action="" method="post" enctype="multipart/form-data">
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
                <input type="date" class="form-control" name="fech_nac" id="fech_nac"
                    aria-describedby="fech_nac" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso</label>
                <input type="text" class="form-control" name="curso" id="curso"
                    aria-describedby="curso" placeholder="Curso del Alumno" required>
            </div>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <input type="text" class="form-control" name="grupo" id="grupo"
                    aria-describedby="grupo" placeholder="Grupo del Alumno" required>
            </div>
            <div class="form-group">
                <label for="img_alumno">Imagen del Alumno</label>
                <input type="file" class="form-control pb-5 pt-3" name="img_alumno" id="img_alumno"
                    aria-describedby="img_alumno" required>
            </div>
            <button type="submit" class="btn btn-success " name="enviar_alumno"   >Crear Alumno</button>
        </form>
    </div>
</div>
<?php
require_once "../bd.php";
/* Hago una modificacion ...... La guardo */
if (isset($_REQUEST["enviar_alumno"]) && isset($_REQUEST["nombre_alumno"]) && isset($_REQUEST["apellidos_alumno"])
    && isset($_REQUEST["fech_nac"]) && isset($_REQUEST["curso"]) && isset($_REQUEST["grupo"]) /*&& isset($_REQUEST["img_alumno"])*/) {

    if ($_REQUEST["nombre_alumno"] != "") {
        $nombre_alumno = mysqli_real_escape_string($enlace, $_REQUEST["nombre_alumno"]);
        $apellidos_alumno = mysqli_real_escape_string($enlace, $_REQUEST["apellidos_alumno"]);
        $fech_nac = mysqli_real_escape_string($enlace, $_REQUEST["fech_nac"]);
        $curso = mysqli_real_escape_string($enlace, $_REQUEST["curso"]);
        $grupo = mysqli_real_escape_string($enlace, $_REQUEST["grupo"]);
        
        if (mysqli_query($enlace, "INSERT INTO `alumnos`(`nombre`, `apellidos`, `fech_nac`, `curso` , `grupo`) 
        VALUES ('$nombre_alumno','$apellidos_alumno','$fech_nac','$curso' ,'$grupo')")) {
            printf("<h2 class=\" pb-3 text-success\">Usuario creado corectament</h2>");
        } else {
            print("<h2 class=\" pb-3 text-danger\">Hubo un error con los datos proporcionados </h2>");
            echo mysql_error($enlace) . ": " . mysql_error($enlace). "\n";
        }
    } else {
        print("<h2 class=\" pb-3 text-danger\">Hubo un error con los datos proporcionados </h2>");
    }

}
?>