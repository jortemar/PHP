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
    
        $nota = 7.34;
        if(is_int($nota)) {
            echo "Nota es un entero";
        } elseif (is_float($nota)) {
            echo "Nota es un decimal";
        }

        echo "<br>";

        echo number_format("1000000");  //da formato
        echo "<br>";

        echo number_format("1000000",2);  //formato y dos decimales
        echo "<br>";

        echo number_format("1000000",2,",",".");  //formato, dos decimales, y aspecto de los separadores
        echo "<br>";



    ?>
</body>
</html>