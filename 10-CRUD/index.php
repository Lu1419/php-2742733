<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="contenedor_grande">
        <div class="contenedor">
            <div>
                <h1 class="titulo">Página de inicio</h1>
            </div>

            <div>
                <form action="index.php" method="post">
                <div class="user"><label for="user">User</label></div>
                <input class="linea" id="user" type="text" name="user">
            </div>
            <br>
            <br>
            <div class="pass"><label for="password">Password</label></div>
            <input class="linea" id="password" type="password" name="password">
            <br>
            <br>
            <div class="boton1">
            <button class="boton" type="submit">Iniciar sesión</button></div>
            </form>
            <br>
            <div class="registro"><a class="registro" href="./registro.php">Registrate</a></div>
    </div>

    
</body>

</html>