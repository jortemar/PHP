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

        $miArchivo = fopen("archivo3.txt", "a+");
        fwrite($miArchivo, "Escribiendo dentro del fichero");
        fflush($miArchivo); //revisa el búffer por si queda algún residuo que volcar

        echo "El peso del archivo es de ". filesize("archivo3.txt"). " bites <br>";

        $arrayinfo = stat("archivo3.txt");
        var_dump($arrayinfo);
        

    ?>
</body>
</html>