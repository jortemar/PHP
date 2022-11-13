<?php
    //apartado 3
    require_once('1.acceso.php');
    $db = conectarBaseDatos("localhost", "empre", "1234", "empresa");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = (isset($_POST['nombreTabla']))?$_POST['nombreTabla']:"";
        $cam1 = (isset($_POST['campo1']))?$_POST['campo1']:"";
        $tip1 = (isset($_POST['tipo1']))?$_POST['tipo1']:"";
        $cam2 = (isset($_POST['campo2']))?$_POST['campo1']:"";
        $tip2 = (isset($_POST['tipo2']))?$_POST['tipo2']:"";

        //añadimos IF NOT EXISTS para que, si ya existe la tabla, no vuelva a crearla
        //añado el apartado 4 junto al 3
        $crearTabla = $db->query(`CREATE table IF NOT EXISTS $nombre ($cam1($tip1), $cam2($tip2));`);
        /*
        if($crearTabla) {
            echo "Tabla creada correctamente <br>";

        } else 
            print_r($db->error_log);
        */    
    }
?>

<html>
<head>
    <title>Introduccion números del Array</title>
</head>
<body>
    <form action="formulario.php" method="post">
    
        Nombre Tabla: <input type="text" name="nombreTabla" id="nombreTabla"><br>
        Campo 1: <input type="text" name="campo1" id="campo1"><br>
        Tipo: <input type="text" name="tipo1" id="tipo1"><br>
        Campo 2: <input type="text" name="campo2" id="campo2"><br>
        Tipo: <input type="text" name="tipo2" id="tipo2"><br>
        <input type="submit">
    </form>
</body>
</html>