<?php
    $devolver = array();
    $mysqli = new mysqli('localhost', 'root', '', 'campeones');
    header('Content-Type: application/json');
    
    if (!isset($_REQUEST['id'])) {
        $sql = 'select * from productos';
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $devolver['id'][] = $row;
            $devolver['nombre'][] = $row;
            $devolver['descripcion'][] = $row;
            $devolver['precio'][] = $row;
            $devolver['tipo'][] = $row;
        };
        echo json_encode($devolver['id']);
    } else {
        $id = $_REQUEST['id'];
        $sql = "select * from productos where id=$id";
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $devolver['id'][] = $row['id'];
            $devolver['nombre'][] = $row['nombre'];
            $devolver['descripcion'][] = $row['descripcion'];
            $devolver['precio'][] = $row['precio'];
            $devolver['tipo'][] = $row['tipo'];
        }
        echo json_encode($devolver);
    }
    $mysqli->close();
?>