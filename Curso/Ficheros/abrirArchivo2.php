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
        } 

        //$todo = file_get_contents("archivo1.txt");
        //echo $todo. "<br>";

        $arraya = file("archivo1.txt");
        var_dump($arraya); //lee arrays

    ?>
    
</body>
</html>