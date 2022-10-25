<?php
    setcookie("noexpira", 2);
    setcookie("expira", 3, time() + 120); // expira en dos minutos

    var_dump($_COOKIE);

    setcookie("idioma", "esp");

    if (isset($_COOKIE['idioma']) && $_COOKIE['idioma'] == "esp") {
        echo "El idioma de la página web ya está configurado en español";
        echo "El valor de la cookie 'idioma' es " + $_COOKIE['idioma'];
    }

    //borrar cookies, dos opciones. La primera (unset) no elimina el registro del historial del navegador.
    //mejor usar la segunda, estableciendo el tiempo en negativo.
    
    //unset($_COOKIE['noexpira']);
    setcookie('noexpira', "", time() - 1);