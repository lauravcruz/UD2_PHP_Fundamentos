<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--008Investiga para qué sirve la instrucción match(), disponible desde PHP8 
    (https://www.php.net/manual/es/control-structures.match.php). Explica 
    con un par de l√≠neas su propósito y mediante código demuestra su uso.-->

    <!-- Match es similar a Switch, aunque hay diferencias. Match hace comparaciones de identidad (===),
    puede retornar valores y lleva un "break" implícitamente para cada caso. -->
    <?php 
        $num =  $_GET["numero"]; 
        $sol = ""; 

        $sol = match($num % 2){
            0 => "par",
            default => "impar"
        }; 

        echo "El número introducido es $sol."; 
    ?>
</body>
</html>