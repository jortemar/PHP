<?php
function comprobarUsuario($nombre, $clave) {
    if ($nombre === "usuario" and $clave === "1234") {
        $usu['nombre'] = "usuario";
        $usu['rol'] = 0;
        return $usu;
    } else if ($nombre === "admin" and $clave === "1234") {
        $usu['nombre'] = "admin";
        $usu['rol'] = 1;
        return $usu;
    } else
        return FALSE;
}

// se inicia cuando se aprieta el botón
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobarUsuario($_POST['usuario'], $_POST['clave']);
    if ($usu == FALSE) {
        $err = TRUE;
        $usuario = $_POST['usuario'];
    } else {
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: 16.(2)sesiones_principal.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if (!isset($_GET["redirigido"])) {
        echo "Haga login para continuar";
    } ?>

    <?php if (isset($err) and $err == true) {
        echo "Revise usuario y contraseña";
    } ?>

    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
        <input value = "<?php if(isset($usuario)) echo $usuario;?>"
        id="usuario" name="usuario" type="text" >
        Clave
        <input id="clave" name="clave" type="password">
        <input type = "submit">
    </form>
</body>
</html>