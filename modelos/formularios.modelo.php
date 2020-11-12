<?php

require_once "Conexion.php";

class ModeloFormularios
{
  static public function mdlRegistro($tabla, $datos)
  {
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(typeProduct,img,processor,ram,hardDisk,warranty,cost,description) VALUES(:typeProduct,:img,:processor,:ram,:hardDisk,:warranty,:cost,:description)");

    $stmt->bindParam(":typeProduct", $datos["ddlType"], PDO::PARAM_STR);
    $stmt->bindParam(":img", $datos["txtImgRegistro"], PDO::PARAM_STR);
    $stmt->bindParam(":processor", $datos["txtProcesador"], PDO::PARAM_STR);
    $stmt->bindParam(":ram", $datos["ddlRam"], PDO::PARAM_STR);
    $stmt->bindParam(":hardDisk", $datos["ddlDiscoDuro"], PDO::PARAM_STR);
    $stmt->bindParam(":warranty", $datos["ddlGarantia"], PDO::PARAM_STR);
    $stmt->bindParam(":cost", $datos["txtCosto"], PDO::PARAM_STR);
    $stmt->bindParam(":description", $datos["txtDescripcion"], PDO::PARAM_STR);

    if ($stmt->execute()) {
      return "ok";
    } else {
      $falla = array(
        "fallaCode" => Conexion::conectar()->errorCode(),
        "fallaInfo" => Conexion::conectar()->errorInfo()
      );
      return $falla;
    }
    $stmt = null;
  }
}
