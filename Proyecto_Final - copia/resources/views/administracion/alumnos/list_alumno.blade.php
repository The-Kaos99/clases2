<div class="row mb-5">
    <div class="col-12">
        <h2 class="text-center">Lista del Alumnado</h2>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">ID</th>
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
                        <td ><a href="{{ asset("admin/alumnos") }}/{{$alumno->slug}}" class="btn btn-primary mb-3">Ver más...</a> <a href="{{ asset("admin/alumnos") }}/{{$alumno->id}}" class="btn btn-warning mb-3">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
