<footer id="sticky-footer" class="py-4 bg-gradient-success opacidad-10 pt-4">
    <div class="container text-center">
      <small>Copyright &copy; Marian Somesan</small><br>
      <small>&reg; I.E.S Murgi</small><br>
      <small>Proyecto integral</small><br>
      <small>2020</small>
    </div>
  </footer>
      <?php 
      if (isset($enlace)) {
          mysqli_close($enlace);
      }      
      ?>