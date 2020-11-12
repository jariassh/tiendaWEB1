<?php
class Conexion
{
  static public function conectar()
  {
    $dbHost = "localhost";
    $dbDatabase = "tiendaweb1";
    $dbUsuario = "root";
    $dbPassword = "";
    try {
      $dbDatos = "mysql:host=" . $dbHost . ";dbname=" . $dbDatabase;
      $conectando = new PDO($dbDatos, $dbUsuario, $dbPassword);
      $conectando->exec("set names utf8");
      return $conectando;
    } catch (PDOException $error) {
      echo ($error->getMessage());
    }
  }
}
