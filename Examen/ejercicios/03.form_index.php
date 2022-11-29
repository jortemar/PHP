<?php
session_start();
$_SESSION['indice'] = 0;
?>

<html>
<head>
    <title>Índice. Insertar números en array</title>
</head>
<body>
    <form action="03.form_insertar.php" method="POST">
        <label for="num"> Introduzca valores en el array </label>
        <input name="num" type="text" />
        <input type="submit" value="Almacenar" />

    </form>
</body>
</html>