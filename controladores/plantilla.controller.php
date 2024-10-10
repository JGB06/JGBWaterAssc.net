<?php

class PlantillaController {
    public function crtGetPlantilla() {
        // Determinar si estamos en la tienda o en el admin basado en la ruta
        if (isset($_GET['seccion']) && $_GET['seccion'] == 'admin') {
            include "vistas/Admin/plantilla.php";
        } else {
            include "vistas/Tienda/plantilla.php";
        }
    }
}
?>