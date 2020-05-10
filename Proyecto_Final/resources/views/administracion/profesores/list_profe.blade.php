<div class="row mb-5">
    <div class="col-12"><h2 class="text-center">Lista de Profesores</h2></div>
</div>      
<div class="row">
        
    @foreach ($profesors as $profesor)     
            <div class="col-md mb-4">
                <div class="card text-center" style="width: 18rem;">
                <div class="card-body border border-dark ">
                  <h5 class="card-title">{{$profesor->nombre}} {{$profesor->apellidos}}</h5>
                  <p class="card-text"><a href="mailto:{{$profesor->email}}">{{$profesor->email}}</a></p>
                <a href="{{asset("admin/profesores/$profesor->id")}}" class="btn btn-danger">Eliminar</a>
                </div>
              </div>
            </div>
                
            @endforeach
        
        </div>