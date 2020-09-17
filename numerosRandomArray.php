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
        for($i=0;$i<$numeroRandomMatriz;$i++){
            $numeroAleatorio = rand(1,30);
            $array[] =$numeroAleatorio ;
           
        }
        print_r ($array);
        $numerosumado = 0;
        if($numeroRandomMatriz>=3){
            for($i=$numeroRandomMatriz;$i>$numeroRandomMatriz-3;$i--){
                $numerosumado = $numerosumado + $array[$i-1];
            }
            print "</br> La suma es ".$numerosumado;
            if ($numerosumado<=10){
                print "</br>La suma es inferior a 10";
            }else if($numerosumado<=20){
                print "</br>La suma es superior a 10 pero inferior a 20";
            }else{
                print "</br>La suma es superior a 20";
            }
        }else{
            if($numeroRandomMatriz==1){
                $numerosumado = $array[0];
            }else{
                $numerosumado = $array[0] + $array[1];
            }
                
            
            print "</br> La suma es ".$numerosumado;
            if ($numerosumado<=10){
                print "</br>La suma es inferior a 10";
            }else if($numerosumado<=20){
                print "</br>La suma es superior a 10 pero inferior a 20";
            }else{
                print "</br>La suma es superior a 20";
            }
        }
      
    ?>
</body>
</html>