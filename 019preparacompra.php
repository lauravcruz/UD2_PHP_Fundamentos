<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019 Prepara compra</title>
</head>

<body>
    <!-- A partir de los archivos creados en el ejercicio anterior, crea una plantilla 
    mediante includes: 019preparaCompra.php: similar a 019preparaTique.php, 
    pero separando el encabezado (Supermercado Lodi en h1) y el pie (Tu 
    supermercado de confianza) en ficheros externos y referenciando a ellos 
    mediante include.-->
    <?php
    include_once("018header.html");
    include_once("019listacompra.php"); //Metemos en el body la lista de la compra final
    include_once("018footer.html");
    ?>
</body>

</html>