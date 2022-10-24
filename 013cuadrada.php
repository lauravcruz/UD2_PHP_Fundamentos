<?php
$col = $_GET["col"];
$row = $_GET["row"];

echo "<table>
        <thead>
            <th colspan = $col>TABLA</th>
        </thead>
        <tbody>";

for ($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $col; $j++) {
        //Para pintar solo los extremos, comprobamos que esté en la 1º o última fila/columna
        if ($i == 1 || $j == 1 || $i == $row || $j == $col) {
            echo "<td>($i.$j)</td>";
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}

echo "</tbody>
    </table>";
