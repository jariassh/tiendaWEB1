<?php

$productos = ControladorFormularios::ctrSeleccionaRegistros();
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
            <!-- FIXME: Corregir envío de id para controlador y abrir modal con información del Item -->
            <input type="hidden" name="idItem" value="<?php echo $producto["idProduct"] ?>">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProducto" name="verItem">Ver Producto</button>
          </form>

        </div>
      </div>

      <div class="modal fade" tab-index="-1" id="modalProducto" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content px-3 pb-3">
            <div class="mr-2 mt-2">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
            $items = ControladorFormularios::ctrSelectItem();
            foreach ($items as $item) :
            ?>
              <div class="row justify-content-center">
                <div class="col-9" id="imgModal">
                  <img class="img-fluid" src="<?php echo $item["img"] ?>" alt="" id="imgModalProduct">
                </div>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-9 text-justify border p-3 mx-2 bg-light">
                  <div class="row">
                    <div class="col text-center">
                      <h4>
                        <strong>
                          <?php
                          $precio = number_format($item["cost"]);
                          echo "$" . $precio;
                          ?>
                        </strong>
                      </h4>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col text-center">
                      <kbd class="px-2">Descripción</kbd>
                    </div>
                  </div>
                  <p><?php
                      $detalleItem = $item["obs"] . ", " . $item["hardDisk"] . ", " . $item["processor"] . ", " . $item["ram"] . ", " . $item["warranty"];
                      echo ($detalleItem);
                      ?></p>
                </div>
              </div>
              <div class="row my-3">
                <div class="col text-center">
                  <form method="POST">
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
                    <input type="hidden" name="id" value="<?php echo $item["idProduct"] ?>">
                    <button type="submit" class="btn btn-danger px-4" name="btnEliminar">Eliminar</button>
                    <a href="modificar" class="btn btn-warning mr-3 px-5">Modificar</a>
                  </form>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>
