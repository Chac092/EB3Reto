<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $NumeroRandom = rand (1,6); 
        $dado1="Fotos/dado1.png";
        $dado2="Fotos/dado2.png";
        $dado3="Fotos/dado3.png";
        $dado4="Fotos/dado4.png";
        $dado5="Fotos/dado5.png";
        $dado6="Fotos/dado6.png";
        switch ($NumeroRandom) {
            case 1:
                echo "<img src='".$dado1."' />";
                break;
            case 2:
                echo "<img src='".$dado2."' />";
                break;
            case 3:
                echo "<img src='".$dado3."' />";
                break;
            case 4:
                echo "<img src='".$dado4."' />";
                break;
            case 5:
                echo "<img src='".$dado5."' />";
                break;
            case 6:
                echo "<img src='".$dado6."' />";
                break;
        }
    
    ?>
</body>
</html>