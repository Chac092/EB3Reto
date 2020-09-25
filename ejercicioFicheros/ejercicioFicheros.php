<?php 



    $linea = $_POST["linea"];
    $Fichero = fopen("fichero_prueba.txt","w"); 
    $string1 = "Esta es la primera línea de texto"; 
    fputs($Fichero,$linea); 
    fclose($Fichero); 

    Descargar("fichero_prueba.txt"); 

    function Descargar($elFichero){ 
        $nombre = basename($elFichero);     
        header( "Content-Type: application/octet-stream");  
        header( "Content-Length: ".filesize($elFichero));  
        header( "Content-Disposition: attachment; filename=".$nombre."");  
        readfile($elFichero);  
    } 
?>