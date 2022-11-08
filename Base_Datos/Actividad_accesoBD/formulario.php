<?php
    require_once('acceso.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = (isset($_POST['nombreTabla']))?$_POST['nombreTabla']:"";
        $nombre = (isset($_POST['campo1']))?$_POST['campo1']:"";

        $nombre = (isset($_POST['campo2']))?$_POST['campo2']:"";

        //añadimos IF NOT EXISTS para que, si ya existe la tabla, no nos la cree
        //otra vez. De esta forma evitamos conflictos.
        $sentencia = 'CREATE table IF NOT EXISTS $nombre';
    }
?>

<html>
<head>
    <title>Introduccion números del Array</title>
</head>
<body>
    <form action="formulario.php" method="post">
    
        <input type="text" name="nombreTabla" id="nombreTabla"><br>
        <input type="text" name="campo1" id="campo1"><br>
        <input type="text" name="campo2" id="campo2"><br>
        <input type="text" name="campo3" id="campo3"><br>
        <input type="submit">
    </form>
</body>
</html>