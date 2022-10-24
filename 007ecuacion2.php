<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>007 Ecuación de 2º grado</title>
</head>

<body>
    <!--Crea un programa que resuelva una ecuación de 2º 
    grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
    tener solución dependiendo del valor del discriminante b²-4ac.Tip: Para 
    calcular la raíz cuadrada deberás utilizar la función sqrt()-->
    <?php
    echo "Introduzca por URL: a, b, c<br><br>";
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    $sol = 0;
    $sol2 = 0;

    /*Calculamos primero el discriminante para ver si tenemos que sacar 2 soluciones, 1, o ninguna*/
    $discriminante = $b ** 2 - 4 * $a * $c;

    if ($discriminante > 0) {
        $sol = (-$b + sqrt($discriminante)) / (2 * $a);
        $sol2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "Tiene dos soluciones: <br> 
            La solución 1 es: $sol <br>
            La solución 2 es: $sol2";
    } else if ($discriminante === 0) {
        /*Si el discriminante es 0, ignoramos la raíz cuadrada de la ecuación (ya que su resultado es 0) */
        $sol = -$b / (2 * $a);
        echo "La solución es: " . $sol;
    } else {
        echo "La ecuación no tiene una solución real";
    }

    ?>
</body>

</html>