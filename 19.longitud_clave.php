

<?php

/* En un array semántico, mostrar elementos cuya longitud 
 de clave sea mayor que 5 */

    $arra = array("Antonio" => 5, "Luis" => 3,
                "Juan" => 8, "Sebastian" => 4);

    
    foreach ($arra as $clave => $valor) {
        if (strlen($clave) > 5) {

            echo "$clave => $valor <br/>";
        }
    }




?>