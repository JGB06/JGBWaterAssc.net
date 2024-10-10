<?php
if(isset($_POST['cerrarSesion'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<div class="sidebar" id="sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="?seccion=tienda&ruta=inicio"><i class="bi bi-house"></i> Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?seccion=tienda&ruta=producto"><i class="bi bi-droplet-half"></i> Consumo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?seccion=tienda&ruta=carrito"><i class="bi bi-chat-right-heart-fill"></i> Redes</a>
        </li>
    </ul>
</div>
