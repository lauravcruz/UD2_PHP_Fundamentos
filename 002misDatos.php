<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002 Mis Datos</title>
</head>

<body>
    <!--Escribe un programa que almacene en variables tu 
    nombre, primer apellido, segundo apellido, email, año en el que naciste y 
    móvil. Luego muéstralos por pantalla dentro de una tabla.-->
    <?php
    $nombre = "Laura";
    $apellido1 = "Valiente";
    $apellido2 = "Cruz";
    $email = "lauravcruzdaw@gmail.com";
    $anioNacimiento = "1997";
    $movil = "654277390";
    ?>
    <table>
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
                <td><?php echo $nombre ?></td>
                <td><?php echo $apellido1 ?></td>
                <td><?php echo $apellido2 ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $anioNacimiento ?></td>
                <td><?php echo $movil ?></td>
            </tr>
        </body>
    </table>

</body>

</html>