<?php

if (isset($rutas[1])) {

  $item = "idProduct";
  $valor = $rutas[2];

  $producto = ControladorFormularios::ctrSeleccionaRegistros($item, $valor);
}
?>


<div class="row">
  <div class="col">
    <header>
      <div class="row colorFondo mb-3" id="cabecera">
        <div class="col-1 d-flex align-items-center logo ml-3 pl-0">
          <h1>MaxiKomputo</h1>
        </div>
        <div class="col-3 pl-1">
          <p class="ml-3">Excelencia, Profesionalismo y Precios Bajos</p>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="row d-flex justify-content-center">
  <div class="w-100 text-center" id="tituloForm">
    <h1>EDITAR PRODUCTO</h1>
  </div>
  <div id="imgForm" class="">
    <img src="<?php echo $producto["img"]; ?>" class="img-fluid" id="imagenActualizar">
  </div>
</div>
<div class="row d-flex justify-content-center mt-3">
  <div class="col-8">
    <form class="p-5 bg-light" id="formActualizar" method="post">
      <div class="row">
        <div class="form-group col-4 mt-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-laptop"></i>
                </span>
              </div>
            </div>
            <select name="actualizarTipo" class="form-control">
              <?php
              $tipo = $producto["typeProduct"];

              switch ($tipo):
                case 'Computador de Mesa':
              ?>
                  <option selected>Computador de Mesa</option>
                  <option>Computador Portatil</option>
                <?php
                  break;
                case 'Computador Portatil':
                ?>
                  <option>Computador de Mesa</option>
                  <option selected>Computador Portatil</option>
                <?php
                  break;

                default:
                ?>
                  <option selected> --- Seleccione Tipo ---</option>
              <?php
                  break;
              endswitch
              ?>
            </select>
          </div>
        </div>
        <div class="form-group col-8 mt-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-image"></i>
                </span>
              </div>
            </div>
            <input id="updateImg" type="text" class="form-control" placeholder="Escriba la URL de la imagen" name="actualizarImg" value="<?php echo $producto["img"]; ?>">
          </div>
          <small id="errorImg" class="text-danger d-none">Campo no puede estar vacío</small>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-6">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-microchip"></i>
                </span>
              </div>
            </div>
            <input type="text" class="form-control" id="actualizarProcesador" name="actualizarProcesador" placeholder="Describa Procesador (Marca, generacion, capacidad en GHz)." value="<?php echo $producto["processor"]; ?>">
          </div>
          <small id="errorProcesador" class="text-danger d-none">Campo no puede estar vacío</small>
        </div>
        <div class="form-group col-6">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-memory"></i>
                </span>
              </div>
            </div>
            <select name="actualizarRAM" class="form-control">
              <?php
              $ram = $producto["ram"];
              switch ($ram):
                case 'Memoria RAM DDR2 2GB 10600S':
              ?><option selected>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
                  <option>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR3 16GB 12800</option>
                  <option>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
                <?php
                  break;
                case 'Memoria RAM DDR2 4GB 12800S':
                ?><option>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
                  <option selected>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
                  <option>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR3 16GB 12800</option>
                  <option>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
                <?php
                  break;
                case 'Memoria RAM DDR3 8GB 10600S':
                ?><option>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
                  <option selected>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR3 16GB 12800</option>
                  <option>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
                <?php
                  break;
                case 'Memoria RAM DDR3 16GB 12800':
                ?><option>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
                  <option>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
                  <option selected>Mem&oacute;ria RAM DDR3 16GB 12800</option>
                  <option>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
                <?php
                  break;
                case 'Memoria RAM DDR4 32GB 10600S':
                ?><option>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
                  <option>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
                  <option>Mem&oacute;ria RAM DDR3 16GB 12800</option>
                  <option selected>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
                <?php
                  break;
                default:
                ?><option selected> --- Seleccione RAM ---</option>
              <?php
                  break;
              endswitch ?>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-4">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-database"></i>
                </span>
              </div>
            </div>
            <select name="actualizarDiscoDuro" class="form-control">
              <?php
              $hardDisk = $producto["hardDisk"];
              switch ($hardDisk):
                case 'Disco SSD 7200-RPM 1TB':
              ?>
                  <option selected>Disco SSD 7200-RPM 1TB</option>
                  <option>Disco SSD 7200-RPM 260GB</option>
                  <option>Disco SSD 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 1TB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 2TB</option>
                <?php
                  break;
                case 'Disco SSD 7200-RPM 260GB':
                ?>
                  <option>Disco SSD 7200-RPM 1TB</option>
                  <option selected>Disco SSD 7200-RPM 260GB</option>
                  <option>Disco SSD 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 1TB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 2TB</option>
                <?php
                  break;
                case 'Disco SSD 7200-RPM 500GB':
                ?>
                  <option>Disco SSD 7200-RPM 1TB</option>
                  <option>Disco SSD 7200-RPM 260GB</option>
                  <option selected>Disco SSD 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 1TB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 2TB</option>
                <?php
                  break;
                case 'Disco Mecánico 7200-RPM 500GB':
                ?>
                  <option>Disco SSD 7200-RPM 1TB</option>
                  <option>Disco SSD 7200-RPM 260GB</option>
                  <option>Disco SSD 7200-RPM 500GB</option>
                  <option selected>Disco Mec&aacute;nico 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 1TB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 2TB</option>
                <?php
                  break;
                case 'Disco Mecánico 7200-RPM 1TB':
                ?>
                  <option>Disco SSD 7200-RPM 1TB</option>
                  <option>Disco SSD 7200-RPM 260GB</option>
                  <option>Disco SSD 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 500GB</option>
                  <option selected>Disco Mec&aacute;nico 7200-RPM 1TB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 2TB</option>
                <?php
                  break;
                case 'Disco Mecánico 7200-RPM 2TB':
                ?>
                  <option>Disco SSD 7200-RPM 1TB</option>
                  <option>Disco SSD 7200-RPM 260GB</option>
                  <option>Disco SSD 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 500GB</option>
                  <option>Disco Mec&aacute;nico 7200-RPM 1TB</option>
                  <option selected>Disco Mec&aacute;nico 7200-RPM 2TB</option>
                <?php
                  break;
                default:
                ?>
                  <option selected> --- Seleccione Disco Duro ---</option>
              <?php
                  break;
              endswitch ?>
            </select>
          </div>
        </div>
        <div class="form-group col-4">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-calendar-check"></i>
                </span>
              </div>
            </div>
            <select name="actualizarGarantia" class="form-control">
              <?php
              $garantia = $producto["warranty"];

              switch ($garantia):
                case 'Garantía 3 Meses':
              ?>
                  <option selected>Garant&iacute;a 3 Meses</option>
                  <option>Garant&iacute;a 6 Meses</option>
                  <option>Garant&iacute;a 1 A&ntilde;o</option>
                  <option>Garant&iacute;a 2 A&ntilde;o</option>
                <?php
                  break;
                case 'Garantía 6 Meses':
                ?>
                  <option>Garant&iacute;a 3 Meses</option>
                  <option selected>Garant&iacute;a 6 Meses</option>
                  <option>Garant&iacute;a 1 A&ntilde;o</option>
                  <option>Garant&iacute;a 2 A&ntilde;o</option>
                <?php
                  break;
                case 'Garantía 1 Año':
                ?>
                  <option>Garant&iacute;a 3 Meses</option>
                  <option>Garant&iacute;a 6 Meses</option>
                  <option selected>Garant&iacute;a 1 A&ntilde;o</option>
                  <option>Garant&iacute;a 2 A&ntilde;o</option>
                <?php
                  break;
                case 'Garantía 2 Año':
                ?>
                  <option>Garant&iacute;a 3 Meses</option>
                  <option>Garant&iacute;a 6 Meses</option>
                  <option>Garant&iacute;a 1 A&ntilde;o</option>
                  <option selected>Garant&iacute;a 2 A&ntilde;o</option>
                <?php
                  break;

                default:
                ?>
                  <option selected> --- Seleccione Garant&iacute;a ---</option>
              <?php
                  break;
              endswitch ?>
            </select>
          </div>
        </div>
        <div class="form-group col-4">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span>
                  <i class="fas fa-coins"></i>
                </span>
              </div>
            </div>
            <input type="text" class="form-control" id="actualizarCosto" name="actualizarCosto" placeholder="Escriba costo sin puntos '.' ni comas ','" value="<?php echo $producto["cost"] ?>">
          </div>
          <small id="errorCosto" class="text-danger d-none">Campo no puede estar vacío</small>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-12">
          <div class="input-group mb-2" id="txtDetallesProducto">
            <textarea class="form-control" id="actualizarDescripcion" name="actualizarDescripcion" rows="6" placeholder="Describa las caracteristicas generales del producto... (Modelo, Marca, SO, Pantalla, etc.)"><?php echo $producto["obs"]; ?></textarea>
          </div>
          <small id="errorDescripcion" class="text-danger d-none">Campo no puede estar vacío</small>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="form-group col-4 text-center">
          <button type="submit" class="btn btn-primary" name="btnGuardarCambios">
            <span class="mr-2">
              <i class="fas fa-database"></i>
            </span>
            GUARDAR CAMBIOS
          </button>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-2 text-center">
          <a href="<?php echo SERVERURL; ?>stock"><span class="mr-2"><i class="fas fa-undo-alt"></i></span>Cancelar</a>
        </div>
      </div>
      <input type="hidden" value="<?php echo $producto["idProduct"] ?>" name="idItem">
  </div>

  <?php

  $actualizar = ControladorFormularios::ctrActualizarRegistro();

  if ($actualizar == "ok") :
  ?>
    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
      Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Actualizado Correctamente!',
        showConfirmButton: false,
        timer: 1500
      });
      setTimeout(function() {
        window.location = "<?php echo SERVERURL; ?>stock";
      }, 2000);
    </script>
  <?php endif ?>
  </form>
</div>
</div>
