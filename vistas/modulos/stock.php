<?php

$productos = ControladorFormularios::ctrSeleccionaRegistros(null, null);
// echo '<pre>';
// print_r($productos);
// echo '</pre>';
?>

<div class="row">
  <div class="col">
    <header>
      <div class="row colorFondo mb-3" id="cabecera">
        <div class="col-4 d-flex align-items-center logo pl-3">
          <h1>MaxiKomputo</h1>
          <p class="ml-3">Excelencia, Profesionalismo y Precios Bajos</p>
        </div>
        <div class="col-5 d-flex align-items-center justify-content-center">
          <h3>PRODUCTOS</h3>
        </div>
        <div class="col-3 d-flex justify-content-center py-2">
          <a href="inicio" class="btn btn-primary">
            <span class="mr-2">
              <i class="fas fa-home"></i>
            </span>
            Inicio
          </a>
          <a href="registro" class="btn btn-primary ml-2">
            <span class="mr-2">
              <i class="fas fa-database"></i>
            </span>
            Registrar Producto
          </a>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="container">
  <div class="row mb-4">
    <?php foreach ($productos as $key => $producto) : ?>

      <div class="card col-5th bg-white mt-3">
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
                  timer: 1500
                });
              </script>
            <?php
            } else {
              print_r($eliminar);
            }
            ?>

            <a href="index.php?pagina=modificar&id=<?php echo $producto["idProduct"]; ?>" class="btn btn-warning px-4"><span><i class="fas fa-edit mr-2"></i></span> Editar</a>
            <input type="hidden" name="id" value="<?php echo $producto["idProduct"] ?>">
            <button type="submit" class="btn btn-danger px-4" name="btnEliminar">Eliminar</button>

          </form>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>
