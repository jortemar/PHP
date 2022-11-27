<?php
    // nos unimos a la sesión la cual queremos cerrar
    session_start();
    $_SESSION = array();

    session_destroy();

    setcookie(session_name(), 123, time() - 10);
    header("Location: 16.sesiones_login.php");