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

  static public function ctrSeleccionaRegistros()
  {
    $tabla = "productos";

    $respuesta = ModeloFormularios::mdlSelecionarRegistros($tabla);

    return $respuesta;
  }

  static public function ctrSelectItem()
  {
    if (isset($_POST["verItem"])) {
      $id = $_POST["idItem"];
      $tabla = "productos";
      $respuesta = ModeloFormularios::mdlItem($tabla, $id);
      return $respuesta;
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
