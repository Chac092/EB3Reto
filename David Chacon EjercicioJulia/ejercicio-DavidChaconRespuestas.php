<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ejercicio-DavidChacon.css">
</head>
<body>
<?php 
        session_start();
        if(isset($_SESSION["arrayPreguntas"])&&isset($_SESSION["arrayRespuestas"])){
            $preguntas = $_SESSION["arrayPreguntas"];
            $respuestas = $_SESSION["arrayRespuestas"];
        }
        $aciertos = 0;
        for($i=0;$i<sizeof($preguntas);$i++){
            if($respuestas[$preguntas[$i]] == $_GET["pregunta".$i]){
                $aciertos += 1; 
            }
        }
        
    ?>
    <h1>Resultado</h1>
    <form action="">
        <fieldset>
            <legend>Respuestas de <?php print($_SESSION["nombreCompleto"])?> </legend>
            <p>  Has acertado <?php print($aciertos)?> veces</p>
        </fieldset>
    </form>
</body>
</html>