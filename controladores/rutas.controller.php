<?php

class RutasController {
    static public function cargarVista() {
        $rutasAdmin = [
            "inicio" => "inicio.php",
            "listado" => "listado.php",
            "sorteo" => "sorteo.php",
            "404" => "404.php",
            "crear" => "crear.php",
            "editar" => "editar.php",
            "eliminar" => "eliminar.php",
            "listadousuarios" => "list.php",
            "agregarusuarios" => "agregarusuarios.php",
            "editarusuario" => "editarusuario.php",
            "eliminarusuario" => "eliminarusuario.php"
        ];

        $rutasTienda = [
            "inicio" => "inicio.php",
            "login" => "login.php",
            "bienvenido" => "welcome.php",
            "producto" => "producto.php",
            "carrito" => "carrito.php",
            "404" => "404.php"
        ];

        if (isset($_GET['seccion']) && $_GET['seccion'] == 'admin') {
            if (isset($_GET['ruta']) && array_key_exists($_GET['ruta'], $rutasAdmin)) {
                $archivo = "vistas/Admin/" . $rutasAdmin[$_GET['ruta']];
                include(file_exists($archivo) ? $archivo : "vistas/404.php");
            } else {
                include("vistas/Admin/inicio.php");
            }
        } else {
            if (isset($_GET['ruta']) && array_key_exists($_GET['ruta'], $rutasTienda)) {
                $archivo = "vistas/Tienda/" . $rutasTienda[$_GET['ruta']];
                include(file_exists($archivo) ? $archivo : "vistas/404.php");
            } else {
                include("vistas/Tienda/inicio.php");
            }
        }
    }
}
?>
