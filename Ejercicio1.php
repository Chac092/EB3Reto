<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer PHP</title>
</head>
<body>
    <?php
        print "<h2>Escribe algo"." por favor </h2>";    
    ?>
    

    <form action="nom.php" method="POST" >
        nombre</br>
        <input type="text" id= "nombre" name="nombre" /></br>
        apellido</br>
        <input type="text" id= "apellido" name="apellido" /></br>
        <input type="submit" value="Enviar"/>
    </form>

    
</body>
<footer>
    <p>David Chacon</p>
</footer>
</html>