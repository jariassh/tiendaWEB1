<?php

class ControladorFormularios
{

  static public function ctrRegistro()
  {
    if (isset($_POST["btnRegistrar"])) {

      $tabla = "productos";

      $datos = array(
        "typeProduct" => $_POST["ddlType"],
        "img" => $_POST["txtImgRegistro"],
        "processor" => $_POST["txtProcesador"],
        "ram" => $_POST["ddlRam"],
        "hardDisk" => $_POST["ddlDiscoDuro"],
        "warranty" => $_POST["ddlGarantia"],
        "cost" => $_POST["txtCosto"],
        "obs" => $_POST["txtDescripcion"],
      );

      if ($datos["processor"]) {
        $respuesta =  ModeloFormularios::mdlRegistro($tabla, $datos);
        return $respuesta;
      } else {
        $respuesta = "error";
        return $respuesta;
      }
    }
  }

  static public function ctrSeleccionaRegistros($item, $valor)
  {
    $tabla = "productos";

    $respuesta = ModeloFormularios::mdlSelecionarRegistros($tabla, $item, $valor);

    return $respuesta;
  }

  static public function ctrActualizarRegistro()
  {
    if (isset($_POST["btnGuardarCambios"])) {

      $tabla = "productos";

      $datos = array(
        "id" => $_POST["idItem"],
        "typeProduct" => $_POST["actualizarTipo"],
        "img" => $_POST["actualizarImg"],
        "processor" => $_POST["actualizarProcesador"],
        "ram" => $_POST["actualizarRAM"],
        "hardDisk" => $_POST["actualizarDiscoDuro"],
        "warranty" => $_POST["actualizarGarantia"],
        "cost" => $_POST["actualizarCosto"],
        "obs" => $_POST["actualizarDescripcion"],
      );

      if ($datos["processor"]) {
        $respuesta =  ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
        return $respuesta;
      } else {
        $respuesta = "error";
        return $respuesta;
      }
    }
  }

  static public function ctrEliminaRegistro()
  {
    if (isset($_POST["btnEliminar"])) {

      $tabla = "productos";
      $idProduct = $_POST["id"];
      if ($idProduct) {
        $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $idProduct);
        return $respuesta;
      } else {
        echo "error";
      }
    }
  }
}
