<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>004 Edad</title>
</head>

<body>
    <!--Sabiendo la edad de una persona, mostrar la edad que 
    tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
    cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
    que trabajarás hasta los 67 años. En este caso, no hace falta que 
    previamente crees un formulario, puedes probar el ejercicio vía URL: 
    004edad.php?edad=33. Tip: $anyoActual = date("Y");-->

    <?php 
        echo "Introduzca por URL: edad<br><br>";
        $edadActual = $_GET["edad"]; 
        $anyoActual = date("Y"); 

        echo "En el año " . ($anyoActual + 10) . " tendrá " . ($edadActual + 10) . " años<br>"; 
        echo "En el año " . ($anyoActual - 10) . " tenía " . ($edadActual - 10) . " años<br>"; 

        if ($edadActual < 67){
            $anyoJubilacion = (67 - $edadActual) + $anyoActual;
            echo "Trabajará hasta el año " . $anyoJubilacion;
        }else{
            echo "Ya está jubilado";
        }
        
    ?>

</body>

</html>