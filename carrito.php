<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda Asir</title>
</head>
<body class='bg-dark'>
    <?php
        include_once("php/banner.php");
    ?>
    <h1 class="text-light">Mi carrito</h1>
    <?php
        session_start();

        echo "<h2 class='text-light'>Productos del carrito</h2>";
        if (empty($_SESSION)) {
            echo "<h3 class='text-light'>El carrito esta vacio</h3>";
        } else {
            echo "<table class='table table-dark'>";
            echo "  <tr>";
            echo "      <th class='text-center'><h2>Imagen</h2></th>";
            echo "      <th class='text-center'><h2>Nombre</h2></th>";
            echo "      <th class='text-center'><h2>Precio</h2></th>";
            echo "      <th class='text-center'><h2>Cantidad</h2></th>";
            echo "  </tr>";
            foreach ($_SESSION as $result) {
                echo "<tr>";
                echo "  <td><img src='".$result['imagen']."' class='img-fluid d-block mx-auto rounded' style='width:400px' alt='".$result['nombre']."'></td>";
                echo "  <td class='text-center align-middle'><h3>".$result['nombre']."</h3></td>";
                echo "  <td class='text-center align-middle'><h3>".$result['precio']."</h3></td>";
                echo "      <form class='mx-2 my-0' action='./session/sendped.php' method='post'>";
                echo "  <td class='text-center align-middle'><input type='number' value='1' id='cantidad' name='cantidad'></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<div class='d-flex justify-content-end mx-2'>";
            echo "  <a class='btn btn-danger btn-lg' href='./session/destroycart.php' role='button'>Vacial el carrito</a>";
            echo "</div>";
            echo "<div class='d-flex justify-content-end align-items-center'>";
            // echo "          <a class='btn btn-success btn-lg mx-2' href='./session/destroycart.php' role='button'>Pagar</a>";
            echo "          <label for='email' class='mt-3 text-light'>Direccion de cliente: </label>";
            echo "          <input type='email' class='form-control mt-3 mx-2' style='width: 20rem;' id='email' aria-describedby='emailHelp' placeholder='Introduce tu email' name='email' value='email'>";
            echo "          <button type='submit' class='btn btn-success mt-2 mx-2'>Pagar</button>";
            echo "      </form>";
            echo "</div>";

        }
    ?>
</body>
</html>