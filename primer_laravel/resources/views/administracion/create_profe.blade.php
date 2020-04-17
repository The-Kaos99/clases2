        <div class="row">
            <div class="col-12"><h2 class="text-center">Creacion del Profesorado</h2></div>
        </div>
        <div class="row pb-5">
            <div class="col-1"></div>
            <div class="col-10 opacidad-0">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre del Profesor</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"
                            aria-describedby="nombre" placeholder="Nombre del Profesor">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos del Profesor</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos"
                            aria-describedby="apellidos" placeholder="Apellidos del Profesor">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="email" class="form-control" name="email" id="email"
                            aria-describedby="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="contra">Contraseña :<br> Sera enviada por correo </label>
                        <input type="hidden" class="form-control" name="Password" id="Password">
                    </div>
                    <!--<button class="btn btn-success" type="submit" name="borrar" onclick="generar(8)" name="enviar">Crear Profesor</button>-->
                    <button type="submit" class="btn btn-success" name="enviar"  onclick="generar(8)" >Crear Profesor</button>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
       
