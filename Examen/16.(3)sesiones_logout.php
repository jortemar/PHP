<?php
    // nos unimos a la sesión la cual queremos cerrar
    session_start();
    $_SESSION = array(); //borra la variable de sesión inicializando el array

    session_destroy(); //destruye la sesión

    setcookie(session_name(), 123, time() - 10); //borra la cookie de sesión
    header("Location: 16.(1)sesiones_login.php");