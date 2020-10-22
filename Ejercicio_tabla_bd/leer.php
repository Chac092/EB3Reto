<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <h1>Gestionar base de datos</h1>
        <?php 
          $servername = "localhost";
          $database = "ejemplo";
          $username = "root";
          $password = "";
        // Conecta con base de datos
        $hostPDO = "mysql:host=$servername;dbname=$database;";
        $miPDO = new PDO($hostPDO, $username, $password);
        // Prepara SELECT
        $miConsulta = $miPDO->prepare('SELECT * FROM libros;');
        // Ejecuta consulta
        $miConsulta->execute();
        ?>
        <p><a class="button" href="nuevo.php">Crear</a></p>
        <table>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Autor</th>
                <th>¿Disponible?</th>
            </tr>
            <?php foreach ($miConsulta as $clave => $valor): ?> 
                <tr>
                <td><?= $valor['codigo']; ?></td>
                <td><?= $valor['titulo']; ?></td>
                <td><?= $valor['autor']; ?></td>
                <td><?= $valor['disponible'] ? 'Si' : 'No'; ?></td>
                <td><a class="button" href="modificar.php?codigo=<?= $valor['codigo'] ?>">Modificar</a></td>
                <td><a class="button" href="borrar.php?codigo=<?= $valor['codigo'] ?>">Borrar</a></td>
                </tr>
            <?php endforeach; ?>
            
            </table>
    </header>
</body>
</html>