<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";
require_once "php/config.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();
