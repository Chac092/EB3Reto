<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADELANTE</h1>
    <?php 
        session_start();
        //$_SESSION["tiradas"] = 0;;
        $fruta1 = rand(1,4);
        $fruta2 = rand(1,4);
        $fruta3 = rand(1,4);

        function darleRuta($fruta){
            switch($fruta){
                case 1:
                    $fruta = "banana.jpg";
                break;
                case 2:
                    $fruta = "fresa.png";
                break;
                case 3:
                    $fruta = "naranja.jpg";
                break;
                case 4:
                    $fruta = "manzana.jpg";
                break;
            }
            return $fruta;
        }
        $fruta1 = darleRuta($fruta1);
        $fruta2 = darleRuta($fruta2);
        $fruta3 = darleRuta($fruta3);
    ?>
    <table border="5"> 
        <tr> 
            <td>
                <img src=<?php  print ("'".$fruta1."'") ?> alt="" width="700" height="700">
            </td>
            <td>
                <img src=<?php  print ("'".$fruta2."'") ?> alt="" width="700" height="700">
            </td>
            <td>
                <img src=<?php  print ("'".$fruta3."'") ?> alt="" width="700" height="700">
            </td>
            <td>
                <form action="tragaperras.php" width="300" height="150">
                    <button type="submit" style = "width:300px; height:150px;font-size:4em;" >Jugar</button>
                </form>
                <label style = "width:300px; height:150px;font-size:4em;">Veces jugado</label> <br>
                <p type="integer" style = "width:300px; height:150px;font-size:4em;"> <?php if(!isset($_SESSION["tiradas"])){ 
                    $_SESSION["tiradas"]=0; };
                    print($_SESSION["tiradas"]);
                    $_SESSION["tiradas"]+=1; ?></p>
            </td>
        </tr>
    </table>
</body>
</html>