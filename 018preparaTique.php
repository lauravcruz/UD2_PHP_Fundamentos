<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018 Prepara Tique</title>
</head>

<body>
    <!--A partir de una cantidad de productos, leer el 
    nombre y coste de la cantidad de productos indicados (la cantidad, se 
    recibe mediante un parámetro GET vía URL).-->
    <?php
    echo "Introduzca la cantidad de cada producto por URL: arroz, pan, leche<br>";

    $cantidadArroz = $_GET["arroz"];
    $cantidadPan = $_GET["pan"];
    $cantidadLeche = $_GET["leche"];

    //Creamos un array asociativo con el producto como clave y la cantidad y precio como valor
    $productos = [
        "Arroz" => [$cantidadArroz, 1.50],
        "Pan" => [$cantidadPan, 0.80],
        "Leche" => [$cantidadLeche, 0.99]
    ];
    ?>

</body>

</html>