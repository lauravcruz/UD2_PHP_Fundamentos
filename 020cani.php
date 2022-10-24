<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>020 Cani</title>
</head>

<body>
    <!--EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.-->

    <h1>EL CANIZADOR</h1>
    <p>Introduzca por URL una frase para hacerte el cani en el estado del Messenger. (variable: frase)</p>
    <?php
    echo canizador($_GET["frase"]);
    function canizador($frase): string
    {
        /*Pasamos la frase a minúscula por si el usuario introduce algo distinto*/
        $frase = strtolower($frase);
        $array = str_split($frase);
        $fraseCani = "";

        for ($i = 0; $i < count($array); $i++) {
            /*Si la posición es par, pasamos a mayúscula*/
            if ($i % 2 == 0) {
                /*strtoupper pasa a mayúscula un caracter o cadena*/
                $fraseCani .= strtoupper($array[$i]);
            } else {
                $fraseCani .= $array[$i];
            }
        }
        return $fraseCani;
    }
    ?>

</body>

</html>