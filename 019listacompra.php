<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019 Lista compra</title>
</head>

<body>
    <!-- 019listaCompra.php: recibe los datos del anterior, y reutiliza parte de 
    018imprimeTiquetCompra.php cambiando la tabla por una lista 
    desordenada de los productos junto a su precio.-->

    <?php
    include_once("018preparaTique.php");
    $finalEuros = 0;
    $finalPesetas = 0;

    foreach ($productos as $producto => $value) {
        echo "<ul>
            <li>$producto</li>
            <ul>
            <li>Cantidad: $value[0]</li> 
            <li>Precio en euros: {$value[1]}€</li>
            <li>Precio en pesetas: " . ($value[1] * 166.3860) . "Ptas.</li>
            <li>Total en euros: " . ($total = $value[0] * $value[1]) . "€</li>
            <li>Total en pesetas: " . ($totalPesetas = $total * 166.1860) . "Ptas.</li>
            </ul>
            </ul>";
        $finalEuros += $total;
        $finalPesetas += $totalPesetas;
    }
    echo "<li>Total en euros: {$finalEuros}€</li>
    <li>Total en euros: {$finalPesetas}Ptas.</li>"
    ?>

</body>

</html>