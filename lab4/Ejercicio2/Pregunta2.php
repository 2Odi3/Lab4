<?php
    $nom = $_POST['noap'];
    $dire = $_POST['dire'];
    $ema = $_POST['ema'];
    $eda = $_POST['eda'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 2-1</title>
</head>
<body>
    <div class="container">
        <?php
            echo '<div class="alert alert-success mt-3" role="alert">BIENVENIDO <br> ¡Hola ' . $nom . '! <br> Tu dirección es ' . $dire . ' <br> Tienes ' . $eda . ' y tu correo es ' . $ema . '</div>';
            echo '<a href="Pregunta2.html" class="btn btn-primary">Listo</a>';
        ?>
    </div>
</body>
</html>
