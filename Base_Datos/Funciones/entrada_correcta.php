<?php
    session_start();
    $usuario = $_SESSION['usuario'];
    echo "Bienvenido $usuario a la página de entrada_correcta";
?>