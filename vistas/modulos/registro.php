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
    <h1>REGISTRAR PRODUCTO</h1>
  </div>
  <div id="imgForm">
    <img src="https://i.postimg.cc/2S9bKh1D/no-image.jpg" class="img-fluid" id="registrarImagen">
  </div>
</div>
<div class="row d-flex justify-content-center mt-3">
  <div class="col-8">
    <form class="p-5 bg-light" id="formRegistrar" method="POST">
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
            <select class="form-control" name="ddlType" id="ddlType">
              <option value="0" selected> --- Seleccione Tipo ---</option>
              <option value="1">Computador de Mesa</option>
              <option value="2">Computador Portatil</option>
            </select>
          </div>
          <small id="errorTipo" class="text-danger d-none">Tipo no seleccionado</small>
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
            <input type="text" id="registerImage" class="form-control" placeholder="https://url-Image..." name="txtImgRegistro" autocomplete="off">
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
            <input type="text" id="txtProcesador" class="form-control" placeholder="Descripci&oacute;n Procesador..." name="txtProcesador" autocomplete="off">
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
            <select class="form-control" name="ddlRam" id="ddlRam">
              <option value="0" selected> --- Seleccione RAM ---</option>
              <option value="1">Mem&oacute;ria RAM DDR2 2GB 10600S</option>
              <option value="2">Mem&oacute;ria RAM DDR2 4GB 12800S</option>
              <option value="3">Mem&oacute;ria RAM DDR3 8GB 10600S</option>
              <option value="4">Mem&oacute;ria RAM DDR3 16GB 12800</option>
              <option value="5">Mem&oacute;ria RAM DDR4 32GB 10600S</option>
            </select>
          </div>
          <small id="errorRam" class="text-danger d-none">RAM no seleccionada</small>
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
            <select class="form-control" name="ddlDiscoDuro" id="ddlDiscoDuro">
              <option value="0" selected> --- Seleccione Disco Duro ---</option>
              <option value="1">Disco SSD 1TB </option>
              <option value="2">Disco SSD 260GB </option>
              <option value="3">Disco SSD 500GB </option>
              <option value="4">Disco Mec&aacute;nico 7200-RPM 500GB </option>
              <option value="5">Disco Mec&aacute;nico 7200-RPM 1TB </option>
              <option value="6">Disco Mec&aacute;nico 7200-RPM 2TB </option>
            </select>
          </div>
          <small id="errorDisco" class="text-danger d-none">Disco Duro no seleccionado</small>
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
            <select class="form-control" name="ddlGarantia" id="ddlGarantia">
              <option value="0" selected> --- Seleccione Garant&iacute;a ---</option>
              <option value="1">Garant&iacute;a 3 Meses</option>
              <option value="2">Garant&iacute;a 6 Meses</option>
              <option value="3">Garant&iacute;a 1 A&ntilde;o</option>
              <option value="4">Garant&iacute;a 2 A&ntilde;o</option>
            </select>
          </div>
          <small id="errorGarantia" class="text-danger d-none">Garant&iacute;a no seleccionada</small>
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
            <input type="number" id="txtCosto" class="form-control" placeholder="Costo..." name="txtCosto" autocomplete="off">
          </div>
          <small id="errorCosto" class="text-danger d-none">Campo no puede estar vacío</small>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-12">
          <div class="input-group mb-2" id="txtDetallesProducto">
            <textarea class="form-control" id="txtDescripcion" rows="6" placeholder="Describa las caracteristicas generales del producto... (Modelo, Marca, SO, Pantalla, etc.)" name="txtDescripcion"></textarea>
          </div>
          <small id="errorDescripcion" class="text-danger d-none">Campo no puede estar vacío</small>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="form-group col-4 text-center">
          <button type="submit" class="btn btn-primary" name="btnRegistrar">
            <span class="mr-2">
              <i class="fas fa-database"></i>
            </span>
            Registrar
          </button>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-2 text-right">
          <a href="<?php echo SERVERURL; ?>stock"><span class="mr-2"><i class="fas fa-store"></i></span>Ver Stock</a>
        </div>
        <div class="col-2">
          <a href="<?php echo SERVERURL; ?>inicio"><span class="mr-2"><i class="fas fa-home"></i></span>Ir al Inicio</a>
        </div>
      </div>
  </div>
  </form>
</div>
</div>

<?php
$registro = ControladorFormularios::ctrRegistro();
if ($registro == "ok") :
?>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
    Swal.fire({
      position: 'top-center',
      icon: 'success',
      title: 'Registro Exitoso!',
      showConfirmButton: false,
      timer: 1500
    });
  </script>
<?php
endif
?>
