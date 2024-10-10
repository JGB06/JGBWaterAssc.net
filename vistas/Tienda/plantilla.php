<?php
// Iniciamos el buffer de salida para evitar que cualquier salida se mande antes de las cabeceras
ob_start();
session_start(); // Aseguramos que se inicie la sesión correctamente
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="light">

<head>
    <?php
    // Incluimos el archivo del encabezado sin generar salida
    include_once("head.php");
    ?>
</head>

<body>
    <?php
    // Incluimos el navbar y sidebar sin generar salida temprana
    include "navbar.php";
    include "sidebar.php";
    ?>
    
    <div class="content container">
        <div class="row">
            <div class="col-md-12">
                <?php
                // Cargamos la vista correspondiente
                RutasController::cargarVista();
                ?>
            </div>
        </div>
    </div>
    
    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $('#sidebarToggle').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('.content').toggleClass('active');
        });
        $('#sidebarClose').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.content').removeClass('active');
        });
    });
    </script>

</body>

</html>

<?php
// Enviamos toda la salida acumulada al navegador después de que las cabeceras han sido enviadas
ob_end_flush();
?>