<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="stylesheets/styles.css">
    <title>Tienda IAW</title>
</head>
<body>
    <section>
        <?php 
            session_start();
            include_once './php_scripts/banner_main.php';
            include './php_scripts/db_connect.php';
        ?>
    </section>
    <section>
        <div class="titulo-pag">
            <h1>PRODUCTOS DISPONIBLES</h1>
        </div>
    </section>
    <section class="grid wrapper">
        <div class="articulo-box box">
            <?php
                    mostrarImagen(1);
                    mostrarNombre(1);
                    mostrarDescripcion(1);
            ?>
                <a href=".">COMPRAR</a>
        </div>
        <div class="articulo-box box">
                <?php
                    mostrarImagen(2);
                    mostrarNombre(2);
                    mostrarDescripcion(2);
                ?>
                <a href=".">COMPRAR</a>
        </div>
        <div class="articulo-box box">
                <?php
                    mostrarImagen(3);
                    mostrarNombre(3);
                    mostrarDescripcion(3);
                ?>
                <a href=".">COMPRAR</a>
        </div>
        <div class="articulo-box box">
                <?php
                    mostrarImagen(1);
                    mostrarNombre(1);
                    mostrarDescripcion(1);
                ?>
                <a href=".">COMPRAR</a>
        </div>
    </section>
</body>
</html>