<?php
    session_start();
    // Recoger los datos
    $imagen = $_REQUEST['imagen'];
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    // Guardar en sesion
    $prodsession = [ 'imagen' => $imagen, 'nombre' => $nombre, 'precio' => $precio ];
    $_SESSION[$nombre] = $prodsession;

    header('Location: /tienda/index.php')
?>