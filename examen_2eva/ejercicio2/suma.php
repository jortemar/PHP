<?php
// AL EJECUTAR EL PROGRAMA SALTA UN MENSAJE DE ERROR
// PERO SI SE INTRODUCEN LOS DATOS EN EL FORMULARIO
// OFRECE LA SOLUCIÓN SIN NINGÚN PROBLEMA APARENTE
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $suma = $num1 + $num2;

    echo"La suma es $suma";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <script language="javascript" src="jquery-1.4.1.js"></script>
    <script language="javascript">
        $(document).ready(function() {
            $("div.mostrar").hide();
            $('form').submit(function() {
                $.ajax( {
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(data) {
                        $('form').html(data);
                        $("div.mostrar").fadeIn('slow');
                    }
                })
                return false;
            })
        })
    </script>

    <form action="./suma.php" method="post" >
        <label>Primer Numero: </label><input type="text" id="num1" name="num1"  /><br />
        <label>Segundo Numero: </label><input type="text" id="num2" name="num2"  /><br />
        <input value="Sumar" type="submit" />
    </form> 

    <div class="mostrar"><strong><?php echo $suma; ?></strong></div>
</body>
</html>