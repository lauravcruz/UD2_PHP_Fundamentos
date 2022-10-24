<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>016 Mates</title>
</head>

<body>
    <!-- Genera un array aleatorio de 33 elementos con números 
    comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media.-->

    <?php
    $aleatorio = [];

    for ($i = 0; $i < 33; $i++) {
        $aleatorio[$i] = rand(0, 100);
    }

    //min y max obtienen el mayor/menor valor dentro de un array
    //Array_sum: la suma de todos los valores del array
    echo "El número más pequeño es:" . min($aleatorio) . "<br> 
        El mayor es:" . max($aleatorio) . "<br>
        La media del array es " . (array_sum($aleatorio) / count($aleatorio));

    ?>
</body>

</html>