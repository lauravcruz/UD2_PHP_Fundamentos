<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>010 Números Pares</title>
</head>

<body>
    <!--A partir del anterior, refactorizar para que funcione con 
    inicio y fin.-->
    <ul>
        <?php
        echo "RANGO DE NÚMEROS PARES PERSONALIZADO<br>
        Introduzca por URL el primer número: inicio y el último: fin<br><br>";

        $inicio = $_GET["inicio"];
        $fin = $_GET["fin"];

        for ($i = $inicio; $i < $fin; $i++) {
            if ($i % 2 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>

</html>