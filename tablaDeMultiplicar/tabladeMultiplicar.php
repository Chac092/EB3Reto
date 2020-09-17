<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_POST['numero'];
      echo "<table border = 8>";
        echo "<thead>";
            echo "<tr>";
                echo "<th> Multilicacion </th>";
                echo "<th> Resultado </th>";
            echo "</tr>";
        echo "</thead>";
        echo "<thead>";
            for($i=0;$i<=10;$i++){
                echo "<tr>";
                    echo "<td>". $numero ."X". $i ."</td>";
                    echo "<td>". $numero*$i ."</td>";
                echo "<tr>";
            }
        echo "</thead>";
      echo "</table>";
    ?>
    
</body>
</html>