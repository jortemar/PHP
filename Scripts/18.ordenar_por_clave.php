<?php
    $arra = array("Lunes" => 11, "Martes" => 3, 
                "Miercoles" => 5, "Jueves" => 23);
    
    ksort($arra);
    foreach ($arra as $clave => $valor) { 
        echo "$clave => $valor <br/>";
    }

    sort($arra);
    foreach ($arra as $clave => $valor) {
        echo "$clave => $valor <br/>";
    }
?>

