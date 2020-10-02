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
        $preguntas= array();
        array_push($preguntas,"En que ciudad nacistes?");
        array_push($preguntas,"De donde son tus padres?");
        array_push($preguntas,"Donde te gustaria vivir en un futuro?");
        array_push($preguntas,"Como te ves en 10 años?");
        array_push($preguntas,"Que te gustaria ser de mayor?");
        array_push($preguntas,"Que animal pesa mas ?");
        array_push($preguntas,"Porque se extinguieron los dinosaurios?");
        array_push($preguntas,"Que es un pez?");
        array_push($preguntas,"Como se llama el animal mas pesado del mundo?");
        array_push($preguntas,"Que comen los pajaros?");
        

        $respuestas["En que ciudad nacistes?"]= "Bilbao";
        $respuestas["De donde son tus padres?"]= "España";
        $respuestas["Donde te gustaria vivir en un futuro?"]= "En una casa";
        $respuestas["Como te ves en 10 años?"]= "Rico";
        $respuestas["Que te gustaria ser de mayor?"]= "informatico";
        $respuestas["Que animal pesa mas ?"]= "Elefante";
        $respuestas["Porque se extinguieron los dinosaurios?"]= "Meteoritos";
        $respuestas["Que es un pez?"]= "Un ser de agua";
        $respuestas["Como se llama el animal mas pesado del mundo?"]= "Los pajaros";
        $respuestas["Que comen los pajaros?"]= "Alpiste";
        
       
        session_start();
        
        $_SESSION["arrayRespuestas"] = $respuestas;
        $_SESSION["nombreCompleto"] = $_GET["nombre"] . " ".$_GET["apellido"];
        
        $preguntas_para_alumno = array();
        $eleccion = $_GET["curso"];
        
            do{
                if($eleccion=="primero"){
                    $numero = rand(0,4);
                }else if($eleccion=="segundo"){
                    $numero = rand(5,9);
                }
                if(!in_array($preguntas[$numero],$preguntas_para_alumno)){
                    array_push( $preguntas_para_alumno, $preguntas[$numero]);
                }
            }while(sizeof($preguntas_para_alumno)<=2);
        
        $_SESSION["arrayPreguntas"] = $preguntas_para_alumno;
    ?>
    <h1>Preguntas</h1>
    <form action="ejercicio-DavidChaconRespuestas.php" method = "$_GET">
        <fieldset>
            <legend>Preguntas para el alumno: <?php print($_SESSION["nombreCompleto"])?></legend>
            <?php 
                for($i=0;$i<sizeof($preguntas_para_alumno);$i++){
                    echo("<label for='pregunta".$i."'>".$preguntas_para_alumno[$i]."</label><br><input type= 'text' name='pregunta".$i."'><br>");

                }
            ?>
            <input type="submit" value="Responder">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
</body>
</html>