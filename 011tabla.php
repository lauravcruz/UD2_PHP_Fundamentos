<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>011 Tabla</title>
</head>

<body>
    <!--Muestra dentro de una tabla HTML la tabla de multiplicar del número que reciba como parámetro. Utiliza <thead> con sus respectivos 
    <th> y <tbody> para dibujar la tabla. -->

    <?php
    echo "Introduzca por URL el número para ver su tabla de multiplicar: num";
    $num = $_GET["num"];
    ?>

    <table>
        <thead>
            <th>A</th>
            <th>*</th>
            <th>B</th>
            <th>=</th>
            <th>A*B</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr>
                <td>$num</td>
                <td>*</td>
                <td>$i</td>
                <td>=</td>
                <td>" . ($num * $i) . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>