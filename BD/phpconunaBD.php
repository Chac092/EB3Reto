<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Mostrar base de datos</h1>
    <?php
        function conectarBD(){      
        $servername = "localhost";
        $database = "alumno";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            print "Connected successfully";
        }
       
        
    }
    function imprimirTabla(){
        $servername = "localhost";
        $database = "alumno";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        $consulta= "SELECT * FROM alumno";
        //mysql_query ($conn,$consulta);
        $result[] = mysqli_query($conn, $consulta);
        print_r ($result);
    }
    conectarBD();
    imprimirTabla();
    ?>
</body>
</html>