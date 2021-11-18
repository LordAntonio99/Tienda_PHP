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
        $id = $_REQUEST['id'];
        $mysqli = new mysqli('localhost', 'root', '', 'campeones');
        $sql = "select * from productos where id=$id";
        $resultado = $mysqli->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $tipo = $row['tipo'];
            $imagen = $row['imagen'];
        }
        echo "<form class='d-flex flex-column align-items-center mt-2' method='post' action='modificar.php?id=$id'>";
        echo "    <div class='mb-3'>";
        echo "        <label for='nombre' class='form-label text-light'>Nombre de producto</label>";
        echo "        <input type='text' class='form-control' style='width: 400px;' id='nombre' name='nombre' value='$nombre' required>";
        echo "    </div>";
        echo "    <div class='mb-3'>";
        echo "        <label for='descripcion' class='form-label text-light'>Descripcion</label>";
        echo "        <textarea type='text' rows='5' class='form-control' style='width: 400px;' id='descripcion' name='descripcion'required>$descripcion</textarea>";
        echo "    </div>";
        echo "    <div class='mb-3'>";
        echo "        <label for='precio' class='form-label text-light'>Precio de producto</label>";
        echo "        <input type='text' class='form-control' style='width: 400px;' id='precio' name='precio' value='$precio' required>";
        echo "    </div>";
        echo "    <div class='mb-3'>";
        echo "      <label for='tipo'>Tipo de producto</label>";
        echo "      <select  class='form-control' style='width: 400px;' id='tipo' name='tipo' selected='selected'>";
        echo "          <option value='$tipo' selected='selected' hidden='hidden'>$tipo</option>";
        echo "          <option value='TOP'>TOP</option>";
        echo "          <option value='MID'>MID</option>";
        echo "          <option value='SUPP'>SUPP</option>";
        echo "          <option value='ADC'>ADC</option>";
        echo "          <option value='JGL'>JGL</option>";
        echo "      </select>";
        echo "    </div>";
        echo "    <button type='submit' class='btn btn-warning' style='width: 400px;'>Modificar</button>";
        echo "</form>";
    ?>
</body>
</html>