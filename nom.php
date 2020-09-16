<?php
//Este PHP sirve para visualizar lo escrito en el anterior
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
    if($nombre == "Antonio"|| $apellido=="Ruiz Santos"){
        print "Bienvenido ". $nombre." ". $apellido. " que pase un buen dia";
    }else{
        print "no tiene acceso";
    }
?>