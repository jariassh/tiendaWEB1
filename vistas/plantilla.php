<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maxikomputo | Tienda WEB 1</title>

  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- CDN JQuery Latest Version -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Font Awesome JS File -->
  <script src="https://kit.fontawesome.com/29f215aa7a.js" crossorigin="anonymous"></script>

  <!-- Project's CSS Files -->
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/styles.css">
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/stylesResponsive.css">

  <!-- CDN Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
  <main class="container-fluid">
    <?php
    $rutas = array();
    if (isset($_GET["pagina"])) {
      $rutas = explode("/", $_GET["pagina"]);
      if (
        $rutas[0] == "inicio" ||
        $rutas[0] == "registro" ||
        $rutas[0] == "stock" ||
        $rutas[0] == "modificar"
      ) {

        include "modulos/" . $rutas[0] . ".php";
      } else {
        header('Location:' . SERVERURL);
      }
    } else {

      include "modulos/inicio.php";
    }
    ?>
  </main>
  <footer class="bg-primary">
    <p>Copyright &copy 2020-2</p>
  </footer>

  <!-- Project's JS Files -->
  <script src="<?php echo SERVERURL; ?>vistas/js/funciones.js"></script>


  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
