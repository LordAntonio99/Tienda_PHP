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
            header('Location: index.php');
            die();
            } else {
                echo "<p class='text-danger'>El apodo o la contraseña son incorrectos.</p>";
            }
        }
?>