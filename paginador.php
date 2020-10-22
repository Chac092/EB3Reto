<?php
//======================================================================
// Variables
//======================================================================
$personajes = [
  'Abelar Hightower',
  'Addam Frey',
  'Addam',
  'Addam Osgrey',
  'Addam Marbrand',
  'Addison Hill',
  'Aegon Blackfyre',
  'Addam Velaryon',
  'Aegon Frey (son of Aenys)',
  'Aegon Frey (son of Stevron)'
];
// Constante con el número de resultados por página: 3
define('LIMITE_RESULTADOS', 2);
// Página donde nos encontramos. Si existe un GET con el nombre 'página' se guarda sino será 1.
$paginaActual = isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1; 
// Crea un nuevo array con los personajes a mostrar en la página
$personajesPagina = array_splice($personajes, ($paginaActual - 1) * LIMITE_RESULTADOS, LIMITE_RESULTADOS);
// Guardo un True o False si nos encontramos en la primera página: ¿La página actual es la primera?
$esPrimera = $paginaActual == 1;
// Guardo un True o False si nos encontramos en la última página: ¿La página actual es la última?
$esUltima = ceil(count($personajes) / LIMITE_RESULTADOS) == $paginaActual;

//======================================================================
// HTML
//======================================================================
?>
<html>
    <body>
        <!-- Bucle que dibuja todos los personajes -->
        <?php foreach ( $personajesPagina as $personaje): ?>
        <div>
            <h1><?= $personaje ?></h1>
            <hr>
        </div>
        <?php endforeach; ?>
        <!-- Botón para retroceder -->
        <?php if (!$esPrimera): ?>
        <a href="paginador.php?pagina=<?= $paginaActual - 1 ?>">Anterior</a>
        <?php endif; ?>
        <!-- Botón para avanzar -->
        <?php if (!$esUltima): ?>
        <a href="paginador.php?pagina=<?= $paginaActual + 1 ?>">Siguiente</a>
        <?php endif; ?>
    </body>
</html>