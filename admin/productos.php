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
        $mysqli = new mysqli("localhost", "root", "", "campeones");
        $sql = "select * from productos";
        $resultado = $mysqli->query($sql);
    
        // $moneda = "<span class='material-icons'>monetization_on</span>";
        echo "<div class='card-deck mx-4'>";
        echo "<div class='row equal d-flex justify-content-center'>";
        while ($row = $resultado->fetch_assoc()) {
            $id = $row['id'];
            echo "<div class='col-auto mb-3 d-flex justify-content-center pb-3'>";
            echo "    <div class='card bg-light' style='width: 24rem;'>";
            echo "            <div class='card-body d-flex flex-column align-content-center'>";
            echo "            <h5 class='card-title'><strong>".$row['id']." - ".$row["nombre"]."</strong></h5>";
            echo "            <p class='card-text align-center'>".$row["descripcion"]."</p>";
            echo "            </div>";
            echo "            <div class='d-flex flex-row' style='width: 100%;'>";
            echo "              <a href='modificarproducto.php?id=$id' class='btn btn-warning mx-auto' style='width: 50%;'>Modificar</a>";
            echo "              <a href='borrar.php?id=$id' class='btn btn-danger mx-auto' style='width: 50%;'>Borrar</a>";
            echo "            </div>";
            echo "    </div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    ?>
</body>
</html>