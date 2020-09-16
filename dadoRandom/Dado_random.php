<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Dado_randomCSS.css">
</head>
<body>
    <p id="dado">
        <?php 
            $NumeroRandom = rand (1,6);   
            echo $NumeroRandom
        ?>
    </p>
</body>
</html>