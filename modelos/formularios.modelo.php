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

  static public function mdlSelecionarRegistros($tabla, $item, $valor)
  {
    if ($item == null && $valor == null) {

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY idProduct DESC");
      $stmt->execute();
      return $stmt->fetchAll();
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM productos WHERE idProduct = :$item");
      $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetch();
    }

    $stmt = null;
  }

  static public function mdlActualizarRegistro($tabla, $datos)
  {
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET typeProduct=:typeProduct, img=:img, processor=:processor, ram=:ram, hardDisk=:hardDisk, warranty=:warranty, cost=:cost, obs=:obs WHERE idProduct=:id");


    $stmt->bindParam(":typeProduct", $datos["typeProduct"], PDO::PARAM_STR);
    $stmt->bindParam(":img", $datos["img"], PDO::PARAM_STR);
    $stmt->bindParam(":processor", $datos["processor"], PDO::PARAM_STR);
    $stmt->bindParam(":ram", $datos["ram"], PDO::PARAM_STR);
    $stmt->bindParam(":hardDisk", $datos["hardDisk"], PDO::PARAM_STR);
    $stmt->bindParam(":warranty", $datos["warranty"], PDO::PARAM_STR);
    $stmt->bindParam(":cost", $datos["cost"], PDO::PARAM_STR);
    $stmt->bindParam(":obs", $datos["obs"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if ($stmt->execute()) {
      return "ok";
    } else {
      return (Conexion::conectar()->errorInfo());
    }
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
