<?php
// Incluir los controladores necesarios
require_once('controladores/plantilla.controller.php');
require_once('controladores/rutas.controller.php');
// Instanciar la clase de la plantilla
$plantilla = new PlantillaController();
// Ejecutar el método
$plantilla->crtGetPlantilla();
?>
