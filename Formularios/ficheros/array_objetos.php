<?php
    require_once("subir_fichero.php");
     
    $subidaFichero = move_uploaded_file($_FILES["fichero"]["tmp_name"], "carpetaFicheros/". "array_personas.txt");

    if($subidaFichero) {
        $gestor = @fopen("array_personas.txt","r");

        while($buffer=fgets($gestor) !== false) {
            $resultado = explode(" ",$buffer);
            $per = new Persona($resultado[0], $resultado[1], $resultado[2], $resultado[3]);
            $arra_persona[] = $per;
        }        
    }

    foreach($arra_persona as $persona) {
        echo $persona;
    }

    /*
    Alternativa para sacar solo las líneas pares

    if($subidaFichero) {
        $gestor = @fopen("array_lineas_pares.txt","r");
        $contador = 1;

        while($buffer=fgets($gestor) !== false) {
            if ($contador % 2 == 0) {
                $resultado = count(explode(" ",$buffer));
                //$salida[] = $resultado;
                foreach($resultado as $clave=>$salida) {
                    echo "$clave=>$salida";
                }

            }

            $per = new Persona($resultado[0], $resultado[1], $resultado[2], $resultado[3]);
            $arra_persona[] = $per;
        }        
    }
    */






?>