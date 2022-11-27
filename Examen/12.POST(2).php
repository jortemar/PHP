<?php
//echo "Usuario introducido: ". $_POST['usuario']. "<br>";
//echo "Clave introducida: ". $_POST['clave']. "<br>";

if ($_POST['usuario'] == "usuario" && $_POST['clave'] == "1234") {
    header("Location: bienvenido.html");
} else {
    header("Location:error.html");
}

// la función header se usa para redirigir a otra web
?>