<div class="row">
    <div class="col-12">
        <h2 class="text-center">Creacion de Padres</h2>
    </div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <form action="/admin/padres" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre">Nombre :</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    aria-describedby="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos :</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos"
                    aria-describedby="apellidos" placeholder="Apellidos" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electronico :</label>
                <input type="email" class="form-control" name="email" id="email"
                    aria-describedby="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="contra">Contraseña :</label>
                <input type="text" class="form-control" value="Sera enviada por correo" disabled="disabled" name="contra" id="contra">
            </div>            
            <button type="submit" class="btn btn-success" >Crear</button>
        </form>
    </div>
    
</div>