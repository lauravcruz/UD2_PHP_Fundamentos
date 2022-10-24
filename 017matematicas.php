<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>017 Matemáticas</title>
</head>

<body>
    <?php
    /*-A√±ade las siguientes funciones:
    digitos(int $num): int ‚ devuelve la cantidad de d√≠gitos de un n√∫mero.
    digitoN(int $num, int $pos): int ‚ devuelve el digito que ocupa, 
    empezando por la izquierda, la posición $pos.
    quitaPorDetras(int $num, int $cant): int ‚ le quita por detrás (derecha) 
    $cant digitos.
    quitaPorDelante(int $num, int $cant): int ‚le quita por delante (izquierda) 
    $cant digitos.
    Para probar las funciones, haz uso tanto de paso de argumentos 
    posicionales como argumentos con nombre.*/


    $num = 1234567;
    echo digitos($num) . "<br>";
    echo digitoN($num, 5) . "<br>";
    echo quitaPorDetras($num, 2) . "<br>";
    echo quitaPorDelante($num, 3) . "<br>";

    function digitos(int $num): int
    {
        return strlen($num);
    }

    function digitoN(int $num, int $pos): int
    {
        /*Strval convierte un entero en String. 
        Sacamos la posición y convertimos a int con intval*/
        $digito = strval(($num))[$pos];
        return intval($digito);
    }

    function quitaPorDetras(int $num, int $cant): int
    {
        return intval(substr($num, 0, -$cant));
    }

    function quitaPorDelante(int $num, int $cant): int
    {
        return intval(substr($num, $cant));
    }
    ?>

</body>

</html>