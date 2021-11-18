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
        $sort_arrow = "<span class='material-icons'>keyboard_arrow_down</span>";
        if (!isset($_SESSION['apodo'])) header('Location: ../inicio.php');
        include_once('banneradmin.php');
        $mysqli = new mysqli('localhost', 'root', '', 'campeones');
        $sort = $_REQUEST['sort'];
        if ($sort == 0){
            $sort = 1;
        } else if ($sort == 1){
            $sort = 0;
        }
        if (!isset($_REQUEST['order'])){
            $sql = 'select * from detallepedidos inner join pedidos using (idpedido)';
        } 
        else if ($_REQUEST['order'] == 'id' && isset($_REQUEST['sort'])){
            if ($_REQUEST['sort']) {
                $var = 'asc';
            } else {
                $var = 'desc';
            }
            $sql = "select * from detallepedidos inner join pedidos using (idpedido) order by idpedido $var";
        }
        else if ($_REQUEST['order'] == 'fecha'){
            if ($_REQUEST['sort']) {
                $var = 'asc';
            } else {
                $var = 'desc';
            }
            $sql = "select * from detallepedidos inner join pedidos using (idpedido) order by fecha $var";
        }
        else if ($_REQUEST['order'] == 'precio'){
            if ($_REQUEST['sort']) {
                $var = 'asc';
            } else {
                $var = 'desc';
            }
            $sql = "select * from detallepedidos inner join pedidos using (idpedido) order by precio $var";
        }
        else if ($_REQUEST['order'] == 'cantidad'){
            if ($_REQUEST['sort']) {
                $var = 'asc';
            } else {
                $var = 'desc';
            }
            $sql = "select * from detallepedidos inner join pedidos using (idpedido) order by cantidad $var";
        }
        else if ($_REQUEST['order'] == 'correo'){
            if ($_REQUEST['sort']) {
                $var = 'asc';
            } else {
                $var = 'desc';
            }
            $sql = "select * from detallepedidos inner join pedidos using (idpedido) order by correocliente $var";
        }
        else if ($_REQUEST['order'] == 'producto'){
            if ($_REQUEST['sort']) {
                $var = 'asc';
            } else {
                $var = 'desc';
            }
            $sql = "select * from detallepedidos inner join pedidos using (idpedido) order by nombre $var";
        }



        $result = $mysqli->query($sql);
        echo "<table class='table table-dark'>";
        echo "    <thead>";
        echo "        <tr>";
        echo "            <th scope='col' class='text-center'><a class='text-decoration-none text-light' href='pedidos.php?order=id&sort=".$sort."'>Id Pedido".$sort_arrow."</a></th>";
        echo "            <th scope='col' class='text-center'><a class='text-decoration-none text-light' href='pedidos.php?order=correo&sort=".$sort."'>Correo cliente".$sort_arrow."</a></th>";
        echo "            <th scope='col' class='text-center'><a class='text-decoration-none text-light' href='pedidos.php?order=producto&sort=".$sort."'>Producto".$sort_arrow."</a></th>";
        echo "            <th scope='col' class='text-center'><a class='text-decoration-none text-light' href='pedidos.php?order=precio&sort=".$sort."'>Precio".$sort_arrow."</a></th>";
        echo "            <th scope='col' class='text-center'><a class='text-decoration-none text-light' href='pedidos.php?order=cantidad&sort=".$sort."'>Cantidad".$sort_arrow."</a></th>";
        echo "            <th scope='col' class='text-center'><a class='text-decoration-none text-light' href='pedidos.php?order=fecha&sort=".$sort."'>Fecha".$sort_arrow."</a></th>";
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