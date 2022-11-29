<?php
session_start(); // unirse a la sesión

/* Si es la primera vez que iniciamos sesión, se crea
la clave 'count' para el array y se inicializa en 0.
Actúa como una cookie, así que su valor se conserva.
La próxima vez que entremos lo recordará y entrará al else */
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}

echo "Hola ". $_SESSION['count']. '<br>';
echo "<a href='16.sesiones(2).php'>Siguiente</a>";

// DOS FORMAS DE ELIMINAR LA SESIÓN (inicializamos a 0 el contador)
// session_destroy();
setcookie(session_name(), 123, time() - 3600);
