<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Feria del Computador | Tienda WEB 1</title>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Project's CSS Files -->
    <link rel="stylesheet" href="vistas/css/estilos.css">
    <link rel="stylesheet" href="vistas/css/settingsMobile.css">
</head>
<body>
    <div class="container-fluid">
        <div class="altoDisplay">
            <?php
    
                if(isset($_GET["pagina"])){
    
                    if($_GET["pagina"] == "inicio" ||
                       $_GET["pagina"] == "registro" ||
                       $_GET["pagina"] == "stock" ||
                       $_GET["pagina"] == "modificar"){
    
                        include "modulos/".$_GET["pagina"].".php";
                       }else{
                        include "modulos/error404.php";
                       }
    
                }else{
    
                    include "modulos/inicio.php";
    
                }
            ?>
        </div>
        <div class="row">
            <div class="w-100">
                <footer class="pl-3 py-3">
                    <p class="mb-0">Copyright &copy 2020-2</p>
                    <small>By: Yhonier Molina and Jonathan Arias</small>
                </footer>
            </div>
         </div>
    </div>    
    <!-- Project's CSS Files -->
    <script src="vistas/js/script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>