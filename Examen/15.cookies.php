<?php   
// si el array para 'visitas' está vacío
if (!isset($_COOKIE['visitas'])) {
    //parámetros: nombre, valor, tiempo de expiración
    setcookie('visitas', '1', time() + 3600 * 24);
    echo "Bienvenido por primera vez";
} else {
    /* colocamos (int) aunque en realidad no es necesario castear.
    Aunque sea una cadena, si el programa puede interpretar el 
    valor como un número, lo va a hacer */

    $visitas = (int) $_COOKIE['visitas'];
    $visitas++;
    setcookie('visitas', $visitas, time() + 3600 * 24);
    echo "Bienvenido por $visitas vez";
}

/* borramos la cookie estableciéndola con un tiempo anterior
al actual. 'time() - x' */
//setcookie('visitas', '2', time() - 5);