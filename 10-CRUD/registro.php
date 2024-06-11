<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password) or empty ($correo)) {
        echo 'Rellene completo el formulario';
    } else {

    //echo $usuario .' - ' . $password;
    /*$_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['correoRegister'] = $correo; */
    //echo ' - variables de sesión guardadas 🥵';

    //header('location: index.php');
    
    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
        echo "Conexión OK";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    //Vamos a preparar una sentencia SQL y la guardamos en una variable

$statement = $conexion->prepare("INSERT INTO `userapp` (`ID`, `username`, `password`, `correo`) VALUES (NULL, :user, :correo, :pass) ");

//ejecutar el statement
$statement->execute( Array(":usuario"=>$usuario, ":correo" => $correo, ":pass" => $password));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleregistro.css">
</head>
<body>
<h1 class="titulo">Registrate</h1>


<div class="contenedorg">

<div class="contendor">


    
</div>
<form action="registro.php" method= "post">
<div class="user"><label for="user">User</label></div>
<input class="linea" id="user" type="text" placeholder="User" name="user">
<div>

<br>
<br>
<div class="pass"><label for="password">Password</label></div>
<input class="linea" id="password" type="password" placeholder="Password" name="password">
<br><br>

<div class="correo">
<label for="correo">Correo</label></div>
<input class="linea" id="correo" type="correo" placeholder="Correo" name="correo">
<br>
<br>
<div class="boton1">
<button class="boton" type="submit">Registrarse</button></div>
</form>
    </div>

</div>


<?php if (isset ($_SESSION['userRegister'])) : ?>

<p>Tus datos han sido registrados, vuelve para iniciar sesión</p>
<p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] . ' - ' . $_SESSION['correoRegister']; ?> </p>
<a href="./index.php">Iniciar sesión</a>

<?php endif?>


</body>
</html>