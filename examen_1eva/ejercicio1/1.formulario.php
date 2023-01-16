<?php
session_start();
$_SESSION['indice'] = 0;
?>

<html>
<head>
    <title> Primera página formulario </title>
</head>
<body>
    <form action="2.insertar_datos.php" method="POST">
        <label for="num"> Introduzca un número en el array </label>
        <input name="num" type="text" />
        <input type="submit" value="Almacenar" />
    </form>
</body>
</html>