<?php
$col = $_GET["col"];
$row = $_GET["row"];

echo "<table>
        <thead>
            <th colspan = $col>TABLA</th>
        </thead>
        <tbody>";

/*Bucle desde el 1 hasta las filas introducidas. Dentro del mismo bucle, 
otro bucle igual para las columnas con el valor de la coordenada*/
for ($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $col; $j++) {
        echo "<td>($i.$j)</td>";
    }
    echo "</tr>";
}

echo "</tbody>
    </table>";
