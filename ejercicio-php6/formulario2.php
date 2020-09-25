<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="visor2.php" method="POST">
       Nombre 
       <input type="text" id= "nombre" name="nombre" /></br>
       Apellido
       <input type="text" id= "apellido" name="apellido" /></br>      
       Ingresos anuales
       <select name="ingresos">
            <option value="Bajos">Menos que 20000</option> 
            <option value="Medios">  Menos que 35000 </option> 
            <option value="Altos">Menos que 50000</option>
            <option value="muyAlyos">Mas que 50000</option>
        </select><br>
        Que inversiones tiene<br>
        
            <input type="checkbox" id="bolsa" name="inversion[]" value="bolsa" >
            <label for="bolsa">Bolsa</label><br>
            <input type="checkbox" id="Inmbiliaria" name="inversion[]" value="Inmbiliaria">
            <label for="Inmbiliaria">Inmbiliaria</label><br>
            <input type="checkbox" id="fondodepension" name="inversion[]" value="fondodepension">
            <label for="fondodepension">Fondo de pensiones</label><br>
            <input type="checkbox" id="ninguna" name="inversion[]" value="ninguna">
            <label for="ninguna">Ninguna &#128561;</label><br>

            <input type="submit" value="Enviar datos">

       <!--  Elija que marca de coche/s hay en su hogar <br>
        <input type="radio" id="ford" name="coche" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="kia" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="masserati" name="coche" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="mercedes" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="renault" name="coche" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="volkswagen" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="honda" name="coche" value="other">
        <label for="other"> </label>  
        <input type="radio" id="ferrari" name="coche" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="lamborghini" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="porscche" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="lexus" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="volvo" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="chebrolet" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="dacia" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="alpha romeo" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="scoda" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="seat" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="nissan" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="citroen" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="bmw" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="audi" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="opel" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="subaru" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="smart" name="coche" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="suzuki" name="coche" value="female">
        <label for="female">Female</label><br> -->

    </form>
</body>
</html>



