<nav class="navbar bg-light">
  <a class="navbar-brand" href="<?php echo SERVERURL; ?>" id="brand">
    <h3 class="text-galada">Maxikomputo</h3>
  </a>
  <div class="d-inline">
    <a href="<?php echo SERVERURL; ?>" class="btn btn-primary mx-2 my-2 px-4">
      <span class="mr-2"><i class="fas fa-home"></i></span>
      Inicio
    </a>
    <a href="<?php echo SERVERURL; ?>stock" class="btn btn-primary my-2">
      <span class="mr-2"><i class="fas fa-laptop"></i></span>
      Ver Productos</a>
  </div>
</nav>
<div class="container margin-inferior">
  <div class="row d-flex justify-content-center">
    <div class="w-100 text-center  mt-3" id="tituloForm">
      <h1 class="text-courgette">Registrar Producto</h1>
    </div>
    <div id="imgForm">
      <img src="https://i.postimg.cc/2S9bKh1D/no-image.jpg" class="img-fluid" id="registrarImagen">
    </div>
  </div>
  <div class="row d-flex justify-content-center mt-3">
    <div class="col-12 col-xl-11 width-form">
      <form class="p-5 bg-light style-form" id="formRegistrar" method="POST">
        <div class="row">
          <div class="form-group col-12 col-md-6 col-lg-4 mt-3">
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
                <option>Computador de Mesa</option>
                <option>Computador Portatil</option>
              </select>
            </div>
            <small id="errorTipo" class="text-danger d-none">Tipo no seleccionado</small>
          </div>
          <div class="form-group col-12 col-md-6 col-lg-8 mt-md-3">
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
          <div class="form-group col-12 col-md-6">
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
          <div class="form-group col-12 col-md-6">
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
                <option>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
                <option>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
                <option>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
                <option>Mem&oacute;ria RAM DDR3 16GB 12800</option>
                <option>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
              </select>
            </div>
            <small id="errorRam" class="text-danger d-none">RAM no seleccionada</small>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-12 col-md-6 col-lg-4">
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
                <option>Disco SSD 1TB </option>
                <option>Disco SSD 260GB </option>
                <option>Disco SSD 500GB </option>
                <option>Disco Mec&aacute;nico 7200-RPM 500GB </option>
                <option>Disco Mec&aacute;nico 7200-RPM 1TB </option>
                <option>Disco Mec&aacute;nico 7200-RPM 2TB </option>
              </select>
            </div>
            <small id="errorDisco" class="text-danger d-none">Disco Duro no seleccionado</small>
          </div>
          <div class="form-group col-12 col-md-6 col-lg-4">
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
                <option>Garant&iacute;a 3 Meses</option>
                <option>Garant&iacute;a 6 Meses</option>
                <option>Garant&iacute;a 1 A&ntilde;o</option>
                <option>Garant&iacute;a 2 A&ntilde;o</option>
              </select>
            </div>
            <small id="errorGarantia" class="text-danger d-none">Garant&iacute;a no seleccionada</small>
          </div>
          <div class="form-group col-12 col-lg-4">
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
              <textarea class="form-control" id="txtDescripcion" rows="4" placeholder="Describa las caracteristicas generales del producto... (Modelo, Marca, SO, Pantalla, etc.)" name="txtDescripcion"></textarea>
            </div>
            <small id="errorDescripcion" class="text-danger d-none">Campo no puede estar vacío</small>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="form-group col-8 col-md-6 col-lg-4 text-center">
            <button type="submit" class="btn btn-primary btn-lg px-5 px-lg-3" name="btnRegistrar">
              <span class="mr-2">
                <i class="fas fa-database"></i>
              </span>
              Registrar
            </button>
          </div>
        </div>
      </form>
    </div>
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

<!-- Project's JS Files -->
<script src="<?php echo SERVERURL; ?>vistas/js/funciones.js"></script>
<script src="<?php echo SERVERURL; ?>vistas/js/validar.registro.js"></script>
