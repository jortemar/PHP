<?php
    // require llama un archivo externo y lo incrusta
    
    $a = "variable del principal";
    require "4.2.ejerequerido.php";
    $b = "otra variable del principal";
    echo "En el script principal";