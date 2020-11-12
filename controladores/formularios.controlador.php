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
        "description" => $_POST["txtDescripcion"],
      );

      if ($_POST["txtImgRegistro"] == "" || $_POST["txtProcesador"] == "" || $_POST["txtCosto"] == "" || $_POST["txtDescripcion"] == "") {



        $respuesta =  ModeloFormularios::mdlRegistro($tabla, $datos);
        return $respuesta;
      } else {
        $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);;
        return $respuesta;
      }
    }
  }
}
