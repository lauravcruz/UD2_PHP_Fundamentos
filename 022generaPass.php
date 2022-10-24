<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>022 Generar Contraseña</title>
</head>

<body>
    <!--Crea una función que, a partir de un tamaño, genere 
    una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria-->
    <h2>Contraseña aleatoria</h2>
    <p>Introduzca por URL el tamaño de la contraseña: size</p>
    <p><?php echo generarPass($_GET["size"]) ?></p>
    <?php

    function generarPass($size)
    {
        $pass = "";
        //Almacenamos en una variable los posibles caracteres de la contraseña
        $caracteres = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

        //Generamos uno a uno los caracteres hasta el tamaño solicitado por el usuario
        for ($i = 0; $i < $size; $i++) {
            //Con substr sacamos un caracter al azar entre la pos 0 y el tamaño del array de caracteres
            $pass .= substr($caracteres, rand(0, strlen($caracteres)), 1);
        }
        return $pass;
    }
    ?>
</body>

</html>