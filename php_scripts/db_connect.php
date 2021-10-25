<?php

$mysqli = new mysqli("localhost", "root", "", "tienda");
if ($mysqli->connect_errno) {
    die("error de conexión: " .$mysqli->connect_errno);
}

function mostrarNombre(string $id_prod) 
{
    $mysqli = new mysqli("localhost", "root", "", "tienda");
    $id = $id_prod;
    $sql = "select * from productos where id_producto = ".$id."";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_assoc();
    echo "<h2>".$row["nom_prod"]."</h2>";
}

function mostrarDescripcion(string $id_prod)
{
    $mysqli = new mysqli("localhost", "root", "", "tienda");
    $id = $id_prod;
    $sql = "select * from productos where id_producto = ".$id."";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_assoc();
    echo "<p>".$row["descripcion"]."</p>";
}

function mostrarImagen(string $id_prod)
{
    $mysqli = new mysqli("localhost", "root", "", "tienda");
    $id = $id_prod;
    $sql = "select * from productos where id_producto = ".$id."";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_assoc();
    #echo "<img src=\"./images/".$row["image_name"]."\">";
    echo "<img src='./images/".$row["image_name"]."'>";
}


?>