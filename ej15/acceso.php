<?php
// acceso.php

// Comprobamos que viene el parámetro ‘nombre’ y no está vacío
if (isset($_GET['nombre']) && trim($_GET['nombre']) !== '') {
    // Escapamos para evitar XSS
    $nombre = htmlspecialchars($_GET['nombre'], ENT_QUOTES, 'UTF-8');
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Acceso</title>
    </head>
    <body>
      <h1>Hola <?php echo $nombre; ?></h1>
    </body>
    </html>
    <?php
} else {
    // Si no hay nombre, redirigimos de vuelta al formulario
    header("Location: e15-bienvenida.php");
    exit;
}

