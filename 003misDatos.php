<?php 
    $nombre = $_GET["nombre"];
    $apellido1 = $_GET["apellido1"];
    $apellido2 = $_GET["apellido2"];
    $email = $_GET["email"];
    $anioNacimiento = $_GET["anioNacimiento"];
    $movil = $_GET["movil"];

    echo "<table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Email</th>
                    <th>Año de nacimiento</th>
                    <th>Móvil</th>
                </tr>
            </thead>
            <body>
                <tr>
                    <td>$nombre</td>
                    <td>$apellido1</td>
                    <td>$apellido2</td>
                    <td>$email</td>
                    <td>$anioNacimiento</td>
                    <td>$movil</td>
                </tr>
            </body>
        </table>";
