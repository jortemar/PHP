<?php
    session_start();
    $_SESSION['indice'] = 0;
?>


<html>
<head>
    <title>Introducción numeros array</title>
</head>
<body>
    <form action="insertar.php" method="post">
    Introducir números en el Array:
    <input type="text" name="num" >
    <br />
    <input type="submit" value="enviar">
    </form>
</body>
</html>