<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {

        /*  echo $usuario . ' - ' . $password;
            if( $usuario == $user_register && $password == $pass_register){
                echo 'listo, iniciaste sesion 👻';
                header('location: user.php');
            }else{  echo 'Tu usuario no existe😴';} */

        //CONEXION CON LA BASE DE DATOS......
        //Entrega final

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("SELECT * FROM `userapp` WHERE username = :user AND password = :pass");

        $statement->execute(array(':user' => $usuario, ':pass' => $password));

        $result = $statement->fetch();

        if ($result) {
            echo 'true';
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            $_SESSION['correoRegister'] = $correo;
            header('Location: user.php');
        } else {
            echo 'false';
        }
    }
}

//$_SESSION['pais'] = 'colombia';

?>

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
                <input class="linea" id="user" type="text" placeholder="User" name="user">
            </div>
            <br>
            <br>
            <div class="pass"><label for="password">Password</label></div>
            <input class="linea" id="password" type="password" placeholder="Password" name="password">
            <br>
            <br>
            <button class="boton" type="submit">Iniciar sesión</button>
            </form>
            <br>

            <a class="registro" href="./registro.php">Registrate</a>
        </div>
    </div>

</body>

</html>