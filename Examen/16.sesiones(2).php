<?php
session_start();

echo "El contador está ahora en: ". $_SESSION['count'];

/* El valor de $_SESSION['count'] se mantiene en este fichero,
al formar parte de la sesión que ya hemos abierto en (1) */