<div class="row pb-2">
    <div class="col-12">
        <h2 class="text-center">Lista de Padres</h2>
    </div>
</div>
<div class="row">
    
    <div class=" col-12 d-flex justify-content-center ">
        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar border border-dark">
            <div class="form-group pt-4 d-flex justify-content-center">
                <label for="search" class="pt-2 mr-2">Busqueda de Padres : </label>
                <input type="text" class="form-control pull-right border border-dark" style="width:20%" id="search" placeholder="Termino">
            </div>
        <table class="table table-bordered table-striped mb-0 text-center" id="mytable">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col" >Accion </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($padres as $padre)
                    <tr>
                        <th scope="row">{{$padre->nombre}}</th>
                        <td> {{$padre->apellidos}}</td>
                        <td> <a href="mailto:{{$padre->email}}">{{$padre->email}}</a></td>
                        <td ><a href="{{ asset("admin/padres") }}/{{$padre->id}}" class="btn btn-primary mb-3">Ver más...</a> <a href="{{ asset("admin/padres") }}/{{$padre->id}}" class="btn btn-warning mb-3">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
