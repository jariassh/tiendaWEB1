<?php

require_once "Conexion.php";

class ModeloFormularios
{
  static public function mdlRegistro($tabla, $datos)
  {
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(typeProduct,img,processor,ram,hardDisk,warranty,cost,	obs) VALUES(:typeProduct,:img,:processor,:ram,:hardDisk,:warranty,:cost,:obs)");

    $stmt->bindParam(":typeProduct", $datos["typeProduct"], PDO::PARAM_STR);
    $stmt->bindParam(":img", $datos["img"], PDO::PARAM_STR);
    $stmt->bindParam(":processor", $datos["processor"], PDO::PARAM_STR);
    $stmt->bindParam(":ram", $datos["ram"], PDO::PARAM_STR);
    $stmt->bindParam(":hardDisk", $datos["hardDisk"], PDO::PARAM_STR);
    $stmt->bindParam(":warranty", $datos["warranty"], PDO::PARAM_STR);
    $stmt->bindParam(":cost", $datos["cost"], PDO::PARAM_STR);
    $stmt->bindParam(":obs", $datos["obs"], PDO::PARAM_STR);

    if ($stmt->execute()) {
      return "ok";
    } else {
      return (Conexion::conectar()->errorInfo());
    }
    $stmt = null;
  }

  static public function mdlSelecionarRegistros($tabla)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt = null;
  }

  static public function mdlItem($tabla, $id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idProduct=$id");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt = null;
  }

  static public function mdlEliminarRegistro($tabla, $idProducto)
  {
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idProduct=$idProducto");
    if ($stmt->execute()) {
      return "ok";
    } else {
      return (Conexion::conectar()->errorInfo());
    }
    $stmt = null;
  }
}
