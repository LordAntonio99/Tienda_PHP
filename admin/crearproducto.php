<?php
    $mysqli = new mysqli('localhost', 'root', '', 'campeones');
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $tipo = $_REQUEST['tipo'];
    $dirImagenes = '/tienda/images/';
    $fichero_subido = $dirImagenes . basename($_FILES['imagen']['name']);

    if (move_uploaded_file($_FILES['imagen']['name'], $fichero_subido)) {
        // Mensaje de confirmacion
        echo "<p>Se ha subido correctamente en la ruta: ". $fichero_subido ."</p>";
        echo "<p><img width='500' src='".$fichero_subido.";</p>";
    }

    $sql = "insert into productos (nombre, descripcion, precio, tipo, imagen) values ('$nombre', '$descripcion', $precio, '$tipo', '$fichero_subido')";
    $mysqli->query($sql);
    $mysqli->close();
    header('Location: addproducto.php');
?>