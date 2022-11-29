<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tarea 3 DEWS</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <main>
        <?php
        /*
        Apartado RA3_c)
        */
        function generarArray($valor)
        {

            $x = array();

            for ($i = $valor; $i >= 0; $i -= 3) {
                $x[] = $i;
            }
            return $x;
        }

        echo "<h1>RA3_C</h1>";
        $result = generarArray(15);
        var_dump($result);

        /*
        Apartado RA3_b)
        */

        function tabla($valores)
        {
            echo '<table style="border:1px solid;">';

            foreach ($valores as $elemento) {
                echo '<tr style="border:1px solid;"><td style="border:1px solid;">' . $elemento . "</td></tr>";
            }
            echo "</table>";
        }

        echo "<h1>RA3_B</h1>";
        $elementos = generarArray(15);
        tabla($elementos);
        /*
        Apartado 3  
        */
        ?>

        <h1>Tarea 3 - Programación básica</h1>
        <form class="elegante" name="Programacion basica" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

            <fieldset>
                <legend>Tarea 3 - Programación básica</legend>
                <label for="Numero">Numero</label>
                <input type="text" placeholder="Introduce un número" name="valor" id="valor" value="<?php if (isset($_POST['valor'])) {
                                                                                                        echo $_POST['valor'];
                                                                                                    } ?>" />


                <input class="btn" type="submit" name="Enviar" value="Darme de alta" />
            </fieldset>
        </form>
        <?php

        if (isset($_POST['valor'])) {
            $numero = $_POST['valor'];

            if (!empty($numero)) {
                switch ($numero) {
                    case !is_numeric($numero):
                        echo "Introduzca un valor numerico";
                        break;
                    case $numero < 0:
                        echo "Introduzca un valor positivo";
                        break;
                    case $numero == 0 or $numero <= 10:
                        $array = generarArray($numero);
                        tabla($array);
                        break;
                    case $numero > 10:
                        echo "Numero demasiado grande";
                        break;
                    default:
                        echo "Valor desconocido";
                        break;
                }
            } else {
                echo "Introduce un valor";
            }
        } else {
            echo "<h2>No se ha introducido ningún valor</h2>";
        }
        ?>
    </main>

</body>