<?php

    session_start();
    $correo = $_REQUEST['email'];

    // Iniciar servicio mysql
    $mysqli = new mysqli('localhost', 'root', '', 'campeones');
    $fecha = date('Y-m-d H:i:s');
    $sql = "insert into pedidos (correocliente, fecha) values ('$correo', '$fecha')";
    $mysqli->query($sql);
    $sql = "select idpedido from pedidos where correocliente='$correo' order by idpedido DESC  limit 1";
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_assoc()) {
        $idcliente = $row['idpedido'];
    };
    $result->close();
    $cantidad = $_REQUEST['cantidad'];
    foreach ($_SESSION as $result) {
        $sql = "insert into detallepedidos (idpedido, nombre, precio, cantidad) values ($idcliente, '".$result['nombre']."', ".$result['precio'].", $cantidad) ";
        echo $sql;
        // $mysqli->query($sql);

    };
    // Cerrar servicio mysql
    $mysqli->close();
    // header('Location: ./destroycart.php');
?>