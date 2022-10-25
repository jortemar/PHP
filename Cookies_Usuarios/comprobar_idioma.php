<?php
    if (!isset($_COOKIE['idioma'])) {
        setcookie('idioma', 'espanol', time() + 3600 * 24);
        echo "Hemos cambiado el idioma a espanol";
    } else {
        $idioma = $_COOKIE['idioma'];
        setcookie('idioma', $idioma, time() + 3600 * 24);
        echo "El idioma ya está en espanol";    
    }