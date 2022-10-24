<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>021 Investiga</title>
</head>

<body>
    <!-- Investiga las siguientes funciones de cadena (explica para 
    qué sirven mediante comentarios, y programa un pequeño ejemplo de cada 
    una de ellas): ucwords, strrev, str_repeat y md5.-->

    <?php
    /*ucwords pone en mayúscula la primera letra de cada palabra de un string
    Tiene un parámetro opcional para añadir delimitadores. 
    Si no se indica delimitador, se pone por defecto: " \t\r\n\f\v" */
    $cadena = "esto es un ejemplo de uc|words";
    echo "<h2>UCWORDS</h2><p>Con delimitador: " . ucwords($cadena, " \|") . "</p>
    <p>Y sin delimitador: " . ucwords($cadena) . "</p>";

    //strrev invierte una cadena 
    $cadena2 = "esto no es un mensaje del demonio, es un ejemplo de strrev";
    echo "<h2>STRREV</h2><p>" . strrev($cadena2) . "</p>";

    //str_repeat devuelve el string introducido multiplicado por x veces
    $cadena3 = "esto es un ejemplo de str_repeat ";
    echo "<h2>STR_REPEAT</h2><p>" . str_repeat($cadena3, 2) . "</p>";

    /*El MD5 es un algoritmo que proporciona un código asociado a un archivo (hash) 
    Puede usarse para comprobar la autenticidad de un archivo: que no ha sido modificado*/
    //En PHP, calcula el hash MED5 de un string
    echo "<h2>MD5</h2><p>" . md5("Esto es un ejemplo de hash") . "</p>";
    ?>
</body>

</html>