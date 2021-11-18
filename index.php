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
<body class="bg-dark">
    <?php
        include_once("./php/banner.php");
    ?>
    <div class="card-deck mx-4">
        <div class="row equal d-flex justify-content-center">
            <?php
                include_once("./php/cards.php");
            ?>
        </div>
    </div>

    
</body>
</html>