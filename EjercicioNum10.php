<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $random = rand(1,15);
        if ($random <=10){
            if($random ==1){
                print "el numero es uno";
            }else if($random==2){
                print "el numero es dos";
            }else if($random==3){
                print "el numero es tres";
            }else if($random ==4){
                print "el numero es cuatro";
            }else if($random ==5){
                print "el numero es cinco";
            }else if($random ==6){
                print "el numero es seis";
            }else if($random ==7){
                print "el numero es siete";
            }else if($random ==8){
                print "el numero es ocho";
            }else if($random ==9){
                print "el numero es nueve";
            }else if($random ==10){
                print "el numero es diez";
            }
        }else{
            print "El numero no esta entre 1 y 10";
        }
    
    ?>
</body>
</html>