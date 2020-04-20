<div class="row">
    <div class="col-12"><h2 class="text-center">Lista de Profesores</h2></div>
</div>
<!--<div class="row">
    <div class="col-12">
        <h1 class="bg-info text-center">Aqui estara la lista de profesores</h1>-->
        
            <div class="row">
        @isset($profesors)
            @foreach ($profesors as $profesor)     
            <div class="col-sm mb-4">
                <div class="card text-center" style="width: 18rem;">
                <div class="card-body border border-dark ">
                  <h5 class="card-title">{{$profesor->nombre}}</h5>
                  <p class="card-text"><a href="mailto:{{$profesor->email}}">{{$profesor->email}}</a></p>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At accusamus labore incidunt voluptatum sunt, 
                      dolor doloremque natus reiciendis,aliquam obcaecati recusandae dolorum, 
                      int temporibus tempore dolorem dignissimos quam eum cumque.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
                
            @endforeach
        @endisset
        </div>
      <!--  
    </div>
</div>-->