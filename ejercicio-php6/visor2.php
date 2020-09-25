<?php 
    $inversiones[] = $_POST["inversion"];
    $ingresos = $_POST['ingresos']; 
    $nombreCompleto =  $_POST['nombre']. $_POST['apellido'];
    print_r ("Se llama ".$nombreCompleto." cuenta con unos ingresos ".$ingresos." y cuenta con inversiones en ");
    if (is_array($inversiones) || is_object($inversiones)){
    foreach($inversiones as $tipo){
        print_r  ($tipo);
     }
    }

?>