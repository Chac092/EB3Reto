<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numerosPares = "";
    numerosPares();
    print $numerosPares


    function numerosPares(){
        for($i=5;$i<=50;$i++){
            if(isset($i)&&$i%2==0){
                $numerosPares = $numerosPares . $i.", ";
            }
        }
    }
    ?>
</body>
</html>