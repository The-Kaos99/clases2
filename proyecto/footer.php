
      <footer class="container-fluid bg-gradient-info opacidad-10 pt-4 ">
          <div class="row">
              <div class="col-12 text-center opacidad-0">
                  <h6>Echa por Marian Somesan</h6>
              </div>
          </div>
          <div class="row">
            <div class="col-12 text-center ">
                <h6>® I.E.S Murgi 2020</h6>
            </div>
        </div>
        <div class="row">
          <div class="col-12 text-center ">
              <h6>Todos los derechos reservados</h6>
          </div>
      </div>
      </footer>
      <?php 
      if (isset($enlace)) {
          mysqli_close($enlace);
      }      
      ?>