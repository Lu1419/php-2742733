
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Verifique su edad</h1>
        <form action="ejercicio.01.php" method= "GET">
        <label for="edad">Ingrese su edad</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Verificar</button>
    </form>


</body>
</html>

<?php

$edad = $_GET["edad"];

if ($edad >= 18){

    echo 'Eres mayor';
}

else if ($edad < 18){

    echo 'Eres menor';
}


?>