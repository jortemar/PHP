<?php
    require_once("./Funciones/funciones.php");
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $base_datos = "empresa";
    $host = "127.0.0.1";

    try {
        $bd = new PDO($base_datos, $host, $usuario, $clave);
        $_SESSION['usuario'] = $usuario;
        header("Location:entrada_correcta.php");
    } catch (PDOException $e) {
        echo "Error: clave y/o usuario no son correctos";
    }
?>    