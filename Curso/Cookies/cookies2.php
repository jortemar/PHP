<?php
    if (isset($_GET['aceptar'])) {
        $caducidad = time() + 3600 * 24 * 365;
        setcookie("micookie", 1, $caducidad);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <div>
        <?php if (!isset($_GET['aceptar']) && !isset($_COOKIE['micookie'])): ?>
            <div class="cookies">
                <h2>Cookies</h2>
                <p>Debe aceptar las cookies para poder continuar</p>
                <a href=?aceptar=1>Aceptar</a>
            </div>
        <?php endif; ?>
    </div>    
</body>
</html>    