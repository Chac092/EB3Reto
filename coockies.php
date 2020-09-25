<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
            <!-- Mensaje de cookies -->
            <div class="cookies">
                <h2>Cookies</h2>
                <p>¿Aceptas nuestras cookies?</p>
                <a href="?politica-cookies=1">Aceptar</a>
            </div>
        <?php endif; ?>
    </div>


</body>
</html>

<?php
// Si han aceptado la política
if(isset($_REQUEST['politica-cookies'])) {
    setcookie("usuario", "Luis", time()+3600);
    setcookie("contraseña","admin",time()+3600);
}
?>