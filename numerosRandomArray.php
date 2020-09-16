<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $numeroRandomMatriz = rand(1,10);
        $array=array();
        for($i=0;$i<$numeroRandomMatriz;$i++){
            $numeroAleatorio = rand();
            $array[$i] =$numeroAleatorio ;
            print_r ($array);
        }

    ?>
</body>
</html>