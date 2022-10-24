<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>015 MoF</title>
</head>

<body>
    <!--Rellena un array de 100 elementos de manera aleatoria con 
    valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, 
    vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los 
    valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 
    66] (no utilices variables para contar las M o las F). Finalmente, muestra el 
    resultado por pantalla.-->

    <?php
    $mf = ["M", "F"];
    $lista = [];

    for ($i = 0; $i < 100; $i++) {
        $lista[$i] = $mf[rand(0, 1)];
    }

    /*La función array_count_values crea un array asociativo colocando como CLAVE el 
    contenido del array recibido y en VALOR las veces que se repite en dicho array*/
    $listaAsociativa = array_count_values($lista);

    foreach ($listaAsociativa as $moF => $veces) {
        echo "$moF : $veces<br>";
    }
    ?>
</body>

</html>