<?php
$productos = ControladorFormularios::ctrSeleccionaRegistros(null, null);
?>
<nav class="navbar bg-light text-center-mobile">
  <a class="navbar-brand" href="<?php echo SERVERURL; ?>" id="brand">
    <h3 class="text-galada">Maxikomputo</h3>
  </a>
  <div class="d-inline">
    <a href="<?php echo SERVERURL; ?>" class="btn btn-primary mx-2 my-2 px-4">
      <span class="mr-2"><i class="fas fa-home"></i></span>
      Inicio
    </a>
    <a href="<?php echo SERVERURL; ?>registro" class="btn btn-primary my-2">
      <span class="mr-2"><i class="fas fa-database"></i></span>
      Nuevo Producto</a>
  </div>
</nav>
<div class="container margin-inferior">
  <div class="row mb-4">
    <?php foreach ($productos as $key => $producto) : ?>

      <div class="card col-12 col-sm-6 col-lg-4 col-xl-3 col-5th bg-white mt-4">
        <a href="#" class="bg bg-white">
          <img class="card-img-top img-fluid" src="<?php echo $producto["img"] ?>" alt="Card image">
        </a>
        <div class="card-body bg-light border shadow-sm text-center p-2">
          <h4 class="card-title text-center">
            <strong>
              <?php
              $costo = number_format($producto["cost"]);
              echo "$" . $costo;
              ?>
            </strong>
          </h4>
          <div class="clearfix text-center">
            <kbd class="">Descripci&oacute;n</kbd>
          </div>
          <p class="card-text text-justify small mt-2">
            <?php

            $especificaciones = $producto["obs"] . ", " . $producto["hardDisk"] . ", " . $producto["processor"] . ", " . $producto["ram"] . ", " . $producto["warranty"];
            echo ($especificaciones);

            ?>.</p>
        </div>
        <div class="card-footer bg-white text-center">

          <form method="post">
            <div class="row">
              <div class="form-group col-12 col-md-6 btnControls">
                <a href="<?php echo SERVERURL; ?>modificar/producto/<?php echo $producto["idProduct"]; ?>" class="btn btn-warning btn-lg px-5 px-md-4 px-lg-3 px-xl-2" id="btnEditar"><span><i class="fas fa-edit mr-1 mr-lg-2 d-none d-md-inline"></i></span> Editar</a>
              </div>
              <div class="form-group col-12 col-md-6 btnControls">
                <input type="hidden" name="id" value="<?php echo $producto["idProduct"] ?>">
                <button type="submit" class="btn btn-danger btn-lg px-5 px-lg-4" name="btnEliminar">Eliminar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?php
$eliminar = ControladorFormularios::ctrEliminaRegistro();
if ($eliminar == "ok") {
?>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
    Swal.fire({
      position: 'top-center',
      icon: 'success',
      title: 'Eliminado Exitoso!',
      showConfirmButton: false,
      timer: 1000
    });
    setTimeout(function() {
      window.location = "<?php echo SERVERURL; ?>stock";
    }, 1500);
  </script>
<?php
} else {
  print_r($eliminar);
}
?>
