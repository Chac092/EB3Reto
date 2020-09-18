<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        Valor 1<br>
        <input type="integer" id= "numero1" name="numero1" /></br>    
        Valor 2<br>
        <input type="integer" id= "numero2" name="numero2" /></br>  
        <select name="operacion">
            <option value="1">Suma</option> 
            <option value="2">Resta</option> 
            <option value="3">Multiplicacion</option>
            <option value="4">Division</option>
        </select>
        <input name="calcular" type="submit" value="Calcular"/>  
    </form>

    <?php 
     if (isset($_POST['calcular'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;
        switch ($operacion) {
            case '1':
                $resultado = $numero1+$numero2;
                break;
            case '2':
                $resultado = $numero1-$numero2;
                break;
            case '3':
                $resultado = $numero1*$numero2;
                break;
            case '4':
                $resultado = $numero1/$numero2;
                break;
        
            default:
                print "Error";
                break;
        }
        print "El resultado es ". $resultado;
}
?>
</body>
</html>