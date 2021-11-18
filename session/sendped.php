<?php

    session_start();
    $correo = $_REQUEST['email'];

    // Iniciar servicio mysql
    $mysqli = new mysqli('localhost', 'root', '', 'campeones');
    echo "<h1>".$correo."</h1>";
    $sql = "insert into pedidos (correocliente) values ('".$correo."')";
    $mysqli->query($sql);
    $sql = "select idpedido from pedidos where correocliente='$correo' order by idpedido DESC  limit 1";
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_assoc()) {
        $idcliente = $row['idpedido'];
    };
    $result->close();
    foreach ($_SESSION as $result) {
        $sql = "insert into detallepedidos (idpedido, nombre, precio, cantidad) values ($idcliente, '".$result['nombre']."', ".$result['precio'].", 1) ".PHP_EOL;
        $mysqli->query($sql);
        echo $sql;
    };
    // Cerrar servicio mysql
    $mysqli->close();
    header('Location: ./destroycart.php');
?>