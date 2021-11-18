<?php
    $mysqli = new mysqli('localhost', 'root', '', 'campeones');
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $tipo = $_REQUEST['tipo'];

    $sql = "update productos set nombre='$nombre', descripcion='$descripcion', precio=$precio, tipo='$tipo' where id=$id";

    echo "<h1 class='text-light'>$sql</h1>";
    $mysqli->query($sql);
    $mysqli->close();
    header('Location: productos.php');
?>