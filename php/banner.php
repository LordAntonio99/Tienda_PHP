<?php
    echo "<nav class='navbar navbar-dark bg-dark justify-content-between'>";
    echo "    <a class='navbar-brand mx-3 text-light' href='/tienda/index.php'><h1>TIENDA DE CAMPEONES</h1></a>";
    echo "    <form class='row mx-3'>";
    echo "          <div>";
    echo "            <button class='btn btn-warning btn-circle' type='button'>";
    echo "                <a href='/tienda/carrito.php' class='text-decoration-none text-reset'>";
    echo "                    <span class='material-icons'>";
    echo "                        shopping_cart";
    echo "                    </span>";
    echo "                </a>";
    echo "            </button>";
    echo "            <button class='btn btn-danger btn-circle' type='button'>";
    echo "                <a href='/tienda/inicio.php' class='text-decoration-none text-reset'>";
    echo "                    <span class='material-icons'>";
    echo "                        admin_panel_settings";
    echo "                    </span>";
    echo "                </a>";
    echo "            </button>";
    echo "          </div>";
    echo "    </form>";
    echo "</nav>";
?>