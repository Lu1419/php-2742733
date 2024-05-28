<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    //verificación de los datos variacion / llenos
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {
        
    //echo $usuario .' - ' . $password;
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    //echo ' - variables de sesión guardadas 🥵';
    //header('location: index.php');
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Registrate</h1>


<form action="registro.php" method= "post">
<label for="user">User</label>
<input id="user" type="text" placeholder="User" name="user">
<br>
<br>
<label for="password">Password</label>
<input id="password" type="password" placeholder="Password" name="password">
<br>
<br>
<button type="submit">Registrarse</button>
</form>

<?php if (isset ($_SESSION['userRegister'])) : ?>

<p>Tus datos han sido registrados, vuelve para iniciar sesión</p>
<p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister']; ?> </p>
<a href="./index.php">Iniciar sesión</a>

<?php endif?>



?>

</body>
</html>