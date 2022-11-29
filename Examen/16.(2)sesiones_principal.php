<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: 16.(1)sesiones_login.php?redirigido=true");
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
    <?php echo "Bienvenido ". $_SESSION['usuario']; ?>
    <br>
    <a href = "16.(3)sesiones_logout.php"> Salir <a>
</body>
</html>