<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $miArchivo = fopen("archivo1.txt","r+");
        if($miArchivo == false) {
            echo "Error al abrir el fichero";
        } //else
           // $contenido = fread($miArchivo, filesize("archivo1.txt"));
            //echo $contenido;

        $miArchivo2 = fopen("archivo3.txt","w");

        $miArchivo3 = fopen("archivo4.txt","w");

        rewind($miArchivo); //rebobina el puntero
        while(feof($miArchivo) == false) {
            echo fgets($miArchivo). "<br>"; //coge la primera línea
            //echo fgetc($miArchivo). "<br>"; //coge el primer caracter

        }
    ?>
    
</body>
</html>