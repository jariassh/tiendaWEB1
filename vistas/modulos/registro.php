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
    <img src="https://i.postimg.cc/fLLvDbYD/portatil.png" class="img-fluid">
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
            <select id="inputState" class="form-control" name="ddlType">
              <option selected> --- Seleccione Tipo ---</option>
              <option>Computador de Mesa</option>
              <option>Computador Portatil</option>
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
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="https://url-Image..." name="txtImgRegistro" autocomplete="off">
          </div>
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
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Descripci&oacute;n Procesador..." name="txtProcesador" autocomplete="off">
          </div>
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
            <select id="inputState" class="form-control" name="ddlRam">
              <option selected> --- Seleccione RAM ---</option>
              <option>Mem&oacute;ria RAM DDR2 2GB 10600S</option>
              <option>Mem&oacute;ria RAM DDR2 4GB 12800S</option>
              <option>Mem&oacute;ria RAM DDR3 8GB 10600S</option>
              <option>Mem&oacute;ria RAM DDR3 16GB 12800</option>
              <option>Mem&oacute;ria RAM DDR4 32GB 10600S</option>
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
            <select id="inputState" class="form-control" name="ddlDiscoDuro">
              <option selected> --- Seleccione Disco Duro ---</option>
              <option>Disco SSD 7200-RPM 1TB </option>
              <option>Disco SSD 7200-RPM 260GB </option>
              <option>Disco SSD 7200-RPM 500GB </option>
              <option>Disco Mec&aacute;nico 7200-RPM 500GB </option>
              <option>Disco Mec&aacute;nico 7200-RPM 1TB </option>
              <option>Disco Mec&aacute;nico 7200-RPM 2TB </option>
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
            <select id="inputState" class="form-control" name="ddlGarantia">
              <option selected> --- Seleccione Garant&iacute;a ---</option>
              <option>Garant&iacute;a 3 Meses</option>
              <option>Garant&iacute;a 6 Meses</option>
              <option>Garant&iacute;a 1 A&ntilde;o</option>
              <option>Garant&iacute;a 2 A&ntilde;o</option>
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
            <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Costo..." name="txtCosto" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-12">
          <div class="input-group mb-2" id="txtDetallesProducto">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Escriba detalles adicionales..." name="txtDescripcion"></textarea>
          </div>
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
          <a href="stock"><span class="mr-2"><i class="fas fa-store"></i></span>Ver Stock</a>
        </div>
        <div class="col-2">
          <a href="inicio"><span class="mr-2"><i class="fas fa-home"></i></span>Ir al Inicio</a>
        </div>
      </div>
  </div>
  </form>
</div>
</div>

<?php
$registro = ControladorFormularios::ctrRegistro();
if ($registro == "ok") {
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
} else {
  print_r($registro);
}
?>
