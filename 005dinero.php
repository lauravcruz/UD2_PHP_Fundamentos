<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>005 Dinero</title>
</head>

<body>
    <!--A partir de una cantidad de dinero, mostrar su 
    descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1), 
    para que el número de elementos sea mínimo. No se utilizar ninguna 
    instrucción condicional. Por ejemplo, al introducir 138 debe mostrar:
        1 billete de 100
        0 billete de 50
        1 billete de 20
        1 billete de 10
        1 billete de 5
        1 moneda de 2
        2 monedas de 1
    Tip: Puedes forzar a realizar la división entera mediante la función 
    intdiv($dividendo, $divisor) o pasar un número flotante a entero puedes 
    usar la función intval().-->

    <?php
    echo "Introduzca por URL: cantidad<br><br>";
    $cantidad = $_GET["cantidad"];
    $billetes = array(100, 50, 20, 10, 5, 2, 1);
    echo "La cantidad introducida se puede descomponer de la siguiente manera: <br>";

    /*Recorremos los billetes. Dividimos el total entre el valor de cada billete y nos da 
    cuántos necesita. Lo que reste, se guarda en cantidad para la siguiente vuelta*/
    
    for ($i = 0; $i < count($billetes); $i++) {
        echo intdiv($cantidad, $billetes[$i]) . " billetes de  $billetes[$i] <br>";
        $cantidad %= $billetes[$i];
    }
    ?>


</body>

</html>