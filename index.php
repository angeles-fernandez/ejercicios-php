<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tarea 2 DEWS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main>
            <?php echo "<b> Apartado RA2_e tarea 2 </b>";
            echo "<br>";
            echo "Angeles Fernandez Gomez";
            echo "<br>";
            echo "49209583W";
            echo "<br>";
            echo "El código del script php siempre se incluye entre las etiquetas &lt;?php y ?&gt;";
            echo "<br>";
            echo "<br>";

            
            echo "<b>Apartado RA2_g tarea 2 </b>";
            echo "<br>";
            $entero = 10;
            $decimal = 8.22;
            $boolean = true;
            $cadena = "cadena";
            const CONSTANTE = "3,14";
            
            //Mostrar las variables
            echo "<ul>
            <li> La variable entera es: " .$entero." </li>
            <li> La variable decimal es: " .$decimal." </li>
            <li> La variable booleana es: " .$boolean." </li>
            <li> La variable tipo cadena es: ".$cadena." </li>
            <li> La constante es ".CONSTANTE." </li>
            </ul>";
            
            //Suma de la variable $entero y de la variable $decimal
            echo "<p>La suma de la variable entero y decimal es: ".$entero + $decimal."</p>";

            ?>
    </main>

</body>

</html>
