<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Iniciar sesion</title>
</head>
<body class="bg-dark">
    <?php
        include_once("./php/banner.php");
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Usuario principal
        $apodoAdmin = 'admin';
        $passwordAdmin = 'admin';

        // Variables para el formulario
        $apodo = isset($_REQUEST['apodo']) ? $_REQUEST['apodo'] : null ;
        $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;

        // Comprobamos si los datos son correctos
        if ($apodoAdmin == $apodo && $passwordAdmin == $password){
            // Si son correctos, creamos la sesion
            session_start();
            $_SESSION['apodo'] = $_REQUEST['apodo'];
            // Redireccionar a la pagina de administracion
            header('Location: admin/index.php');
            } else {
                echo "<p class='text-danger'>El apodo o la contraseña son incorrectos.</p>";
            }
        }
    ?>
    <form class='d-flex flex-column align-items-center mt-2' method='post'>
        <div class="mb-3">
            <label for="apodo" class="form-label text-light">Nombre de usuario</label>
            <input type="text" class="form-control" style='width: 400px;' id='apodo' name='apodo'>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-light">Password</label>
            <input type="password" class="form-control" style='width: 400px;' id="password" name='password'>
        </div>
        <button type="submit" class="btn btn-danger" style='width: 400px;'>Iniciar sesion</button>
    </form>
</body>
</html>