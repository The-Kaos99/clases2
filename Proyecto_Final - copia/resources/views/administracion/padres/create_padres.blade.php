<div class="row">
    <div class="col-12">
        <h2 class="text-center">Creacion de Padres</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
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
    <div class="col-md-6">
        <div class="table-responsive">
            <table class="table text-center">º
                  <tr>
                    <th scope="col">Hijo</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Curso y Grupo</th>
                    <th scope="col" >Accion </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <th scope="row">{{$alumno->id}}</th>
                            <td> <img class="rounded-circle mx-auto d-block" src="{{ asset("images") }}/{{$alumno->imagen}}" alt="" srcset="" width="100" height="75"></td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->apellidos}}</td>
                            <td>{{$alumno->curso}} {{$alumno->grupo}}</td>
                            <td ><a href="{{ asset("admin/alumnos") }}/{{$alumno->slug}}" class="btn btn-primary mb-3">Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
    </div>
</div>