<?php
    $ruta = "carpeta_fichero/".$_FILES["fichero"]["name"];
    $ficheroCopiado = move_uploaded_file($_FILES["fichero"]["tmp_name"], $ruta);
    
    if ($ficheroCopiado) {
        $fichero = fopen($ruta,"r"); 
        $arrPalabras = array();
        
        while (!feof($fichero)) {
            $linea = fgets($fichero);
            //echo $linea. '<br>';
            //$linea = explode("\n", $linea);   
            $palabras = explode(",", $linea);  
            
            print_r($palabras);                  
        }
    }       
    
    fclose($fichero);
    /*
    while ($buffer = fgets($fichero) !== false) {
        $arrayLineas = explode("\n",$buffer); //separa en líneas
        foreach($arrayLineas as $linea )
            $filaPalabras = explode(",", $linea);  //separa en palabras
    
    */
    