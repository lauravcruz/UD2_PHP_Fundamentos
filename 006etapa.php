<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>006 Etapa</title>
</head>

<body>
    <!--006etapa.php: A partir de una edad muestra por pantalla:bebé si tiene menos de 3 años
    niño si tiene entre 3 y 12 años
    adolescente entre 13 y 17 años
    adulto entre 18 y 66
    jubilado a partir de 67-->

    <?php
    echo "Introduzca por URL: edad<br><br>";
    $edad = $_GET["edad"];

    echo "Etapa de su edad: ";
    if ($edad < 3) {
        echo "Bebé";
    } else if ($edad >= 3 && $edad <= 12) {
        echo "Niño";
    } else if ($edad >= 13 && $edad <= 17) {
        echo "Adolescente";
    } else if ($edad >= 18 && $edad <= 66) {
        echo "Adulto";
    } else {
        echo "Jubilado";
    }
    ?>
</body>

</html>