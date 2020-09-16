<?php
//Este PHP sirve para visualizar lo escrito en el anterior
$nombre = $_POST['nombre'];
    if($nombre != ""){
        echo "<p>Escribiste --> $nombre</p>";
    }else{
        print "<p>No has escrito nada pillin</p>";
    }
?>