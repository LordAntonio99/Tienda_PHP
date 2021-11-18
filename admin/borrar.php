<?php
    $mysqli = new mysqli('localhost', 'root', '', 'campeones');
    $id = $_REQUEST['id'];

    $sql = "delete from productos where id=$id";
    $mysqli->query($sql);
    $mysqli->close();
    header('Location: productos.php');
?>