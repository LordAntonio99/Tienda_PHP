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
        $mysqli = new mysqli('localhost', 'root', '', 'campeones');
        $sql = 'select * from detallepedidos inner join pedidos using (idpedido)';
        $result = $mysqli->query($sql);
        echo "<table class='table table-dark'>";
        echo "    <thead>";
        echo "        <tr>";
        echo "            <th scope='col' class='text-center'>Id Pedido</th>";
        echo "            <th scope='col' class='text-center'>Cliente</th>";
        echo "            <th scope='col' class='text-center'>Producto</th>";
        echo "            <th scope='col' class='text-center'>Precio</th>";
        echo "            <th scope='col' class='text-center'>Cantidad</th>";
        echo "            <th scope='col' class='text-center'>Fecha</th>";
        echo "        </tr>";
        echo "    </thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "  <td class='text-center align-middle'><h3>".$row['idpedido']."</h3></td>";
            echo "  <td class='text-center align-middle'><h3>".$row['correocliente']."</h3></td>";
            echo "  <td class='text-center align-middle'><h3>".$row['nombre']."</h3></td>";
            echo "  <td class='text-center align-middle'><h3>".$row['precio']."</h3></td>";
            echo "  <td class='text-center align-middle'><h3>".$row['cantidad']."</h3></td>";
            echo "  <td class='text-center align-middle'><h3>".$row['fecha']."</h3></td>";
            echo "</tr>";
        }
        $mysqli->close();
    ?>
</body>
</html>