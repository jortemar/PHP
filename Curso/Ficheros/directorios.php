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

        echo getcwd(). "<br>"; //muestra la ruta del directorio actual

        $directorio = scandir(getcwd());
        var_dump($directorio);

        echo "<br>";

        chdir('../'); //cambia de directorio (en este caso retrocede un paso)
        echo getcwd();



    ?>
</body>
</html>