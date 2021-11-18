<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Administracion</title>
</head>
<body class="bg-dark">
    <?php
        session_start();
        if (!isset($_SESSION['apodo'])) header('Location: ../inicio.php');
        include_once('banneradmin.php');
        echo "<h2 class='text-light mx-2'>Bienvenido ".$_SESSION['apodo']."</h2>";
        $mysqli = new mysqli('localhost', 'root', '', 'campeones');
        $sql = 'select count(nombre) as cantidadprod from productos';
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $cantidadprod = $row['cantidadprod'];
        };
        echo "<h3 class='text-light mx-4'>Hay un total de $cantidadprod productos.</h3>";
        $sql = 'select count(idpedido) as npedidos from pedidos';
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $npedidos = $row['npedidos'];
        };
        echo "<h3 class='text-light mx-4'>Hay un total de $npedidos pedidos.</h3>";
        $sql = 'select sum(precio) as facturado from detallepedidos';
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $facturado = $row['facturado'];
        };
        echo "<h3 class='text-light mx-4'>Se ha facturado un total de $facturado $.</h3>";
        $sql = 'select correocliente from pedidos order by idpedido desc limit 1';
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $correocliente = $row['correocliente'];
        };
        echo "<h3 class='text-light mx-4'>El ultimo pedido ha sido de $correocliente.</h3>";
        $mysqli->close();
    ?>
</body>
</html>