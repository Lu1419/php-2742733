<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Calcular salario</h1>
    <form action="ejercicio.02.php" method="post">
        <label for="horas">Horas trabajads al mes:</label>
        <br>
        <input type="number" id="horas" name="horas" required>
        <br>
        <label for="valor">Valor de la hora:</label>
        <br>
        <input type="number" id="valor" name="valor" required>
        <br>
        <button type="submit">Calcular</button>

    </form>


</body>





<?php

    $horas = $_POST['horas'];
    $valor = $_POST['valor'];
    $resultado = $horas * $valor;

    if ($resultado >= 2200000){

        echo "Hay retención de fuente";
    }

    else if ($resultado < 2200000){

        echo "No hay retención de fuente";
    }
?>
</html>