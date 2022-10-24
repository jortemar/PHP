<?php
    if ($_POST['usuario'] == "jose" && $_POST['clave'] == '1234') {
        header("Location:bienvenido.html");
    } else
        header("Location:error.html");

    /*----------------------------------------------------*/    

    echo "Usuario introducido: ". $_POST['usuario']. "<br>";
    echo "Clave introducida: ". $_POST['clave'];
