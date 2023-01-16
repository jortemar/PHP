<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Segunda página formulario </title>
</head>
<body>
    <!-- Introduciendo un cero rompemos el bucle
    y saltamos al archivo 'operaciones.php' -->
    <form action="1.formulario.php" method="POST">
        <label for="num"> ¿Desea introducir otra serie? </label>
        <input name="num" type="text" /> <!-- esto sobra, o se puede usar para escribir la respuesta -->
        <input type="submit" value="Sí" />
        <input type="submit" value="No" />
    </form>
</body>
</html>