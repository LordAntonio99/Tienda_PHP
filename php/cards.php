<?php

    $mysqli = new mysqli("localhost", "root", "", "campeones");
    $sql = "select * from productos";
    $resultado = $mysqli->query($sql);

    // $moneda = "<span class='material-icons'>monetization_on</span>";

    while ($row = $resultado->fetch_assoc()) {
        $imagen = $row['imagen'];
        $nombre = $row['nombre'];
        $precio = $row['precio'];
        echo "<div class='col-auto mb-3 d-flex justify-content-center pb-3'>";
        echo "    <div class='card bg-light' style='width: 24rem;'>";
        echo "            <img class='card-img-top mx-auto rounded' style='height: 16rem;' src=".$row["imagen"]." alt='Card image cap'>";
        echo "            <div class='card-body d-flex flex-column align-content-center'>";
        echo "            <h5 class='card-title'><strong>".$row["nombre"]."</strong></h5>";
        echo "            <p class='card-text align-center'>".$row["descripcion"]."</p>";
        echo "              <div class='mt-auto d-flex justify-content-end'>";
        echo "            <a href='/tienda/session/addprod.php?imagen=$imagen&nombre=$nombre&precio=$precio' class='btn btn-primary mt-auto'>Comprar</a>";
        echo "            <a class='btn btn-warning mx-3'>".$row["precio"]."<span class='material-icons' style='font-size: 15px;'>attach_money</span></a>";
        echo "              </div>";
        echo "            </div>";
        echo "    </div>";
        echo "</div>";
    }

?>