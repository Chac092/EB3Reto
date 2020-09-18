<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $suma=0;
        for($i=1;$i<1000;$i++){
            $array[]=$i;
        }
        $i=0;
        while($i<997){
            $numero1 = $array[$i] ;
            $numero2 = $array[$i+1];
            $numero3 =$array[$i+2] ;
            $suma = $suma+$numero1+$numero2+$numero3;
            print $suma ."</br>";
            $i = $i+3;
        }
    ?>
</body>
</html>