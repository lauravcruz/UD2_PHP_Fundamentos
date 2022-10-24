<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018 Imprime Tique</title>
</head>

<body>
    <!--Tras leer los datos del tique de compra, enumera en 
    una tabla los productos, con su precio en euros y pesetas, y finalmente, en 
    una última fila, totalizar en ambas monedas.-->
    <?php
    //Añadimos el php que creamos anteriormente con include_once
    include_once("018preparaTique.php");
    ?>
    <table>
        <thead>
            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
            <th>€</th>
            <th>Ptas.</th>
            <th>TOTAL</th>
        </thead>
        <tbody>
            <?php
            $finalEuros = 0;
            $finalPesetas = 0;

            foreach ($productos as $producto => $value) {
                echo "<tr>
                <td>$producto</td>
                <td>$value[0]</td> 
                <td>{$value[1]}€</td>
                <td>" . ($value[1] * 166.3860) . "Ptas.</td>
                <td>" . ($total = $value[0] * $value[1]) . "€ <br> " . ($totalPesetas = ($total * 166.1860)) . "Ptas.</td>
                </tr>";
                $finalEuros += $total;
                $finalPesetas += $totalPesetas;
            }
            echo "<tr><td>Total en euros: {$finalEuros}€</td></tr>
            <tr><td>Total en euros: {$finalPesetas}Ptas.</td></tr>"
            ?>
        </tbody>
    </table>

</body>

</html>