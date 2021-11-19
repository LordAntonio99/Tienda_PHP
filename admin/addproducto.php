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
        echo "<form class='d-flex flex-column align-items-center mt-2' method='post' action='crearproducto.php' enctype='multipart/form-data'>";
        echo "    <div class='mb-3'>";
        echo "        <label for='nombre' class='form-label text-light'>Nombre de producto</label>";
        echo "        <input type='text' class='form-control' style='width: 400px;' id='nombre' name='nombre' required>";
        echo "    </div>";
        echo "    <div class='mb-3'>";
        echo "        <label for='descripcion' class='form-label text-light'>Descripcion</label>";
        echo "        <textarea type='text' rows='5' class='form-control' style='width: 400px;' id='descripcion' name='descripcion' required></textarea>";
        echo "    </div>";
        echo "    <div class='mb-3'>";
        echo "        <label for='precio' class='form-label text-light'>Precio de producto</label>";
        echo "        <input type='text' class='form-control' style='width: 400px;' id='precio' name='precio' required>";
        echo "    </div>";
        echo "    <div class='mb-3'>";
        echo "      <label for='tipo'>Tipo de producto</label>";
        echo "      <select  class='form-control' style='width: 400px;' id='tipo' name='tipo'>";
        echo "          <option>TOP</option>";
        echo "          <option>MID</option>";
        echo "          <option>SUPP</option>";
        echo "          <option>ADC</option>";
        echo "          <option>JGL</option>";
        echo "      </select>";
        echo "    </div>";
        echo "    <div class='mb-3 mt-3 custom-file' style='width: 400px;'>";
        echo "        <label class='custom-file-label text-light mb-3' for='imagen'>Selecciona una imagen.</label>";
        echo "        <input type='file' class='custom-file-input' id='imagen' name='imagen' accept='image/png, image/jpeg' required>";
        echo "    </div>";
        echo "    <button type='submit' class='btn btn-success' style='width: 400px;'>Crear producto</button>";
        echo "</form>";
    ?>
</body>
</html>