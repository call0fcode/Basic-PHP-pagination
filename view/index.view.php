<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Paginación</title>
</head>
<body>
  <div class="contenedor">
    <h1>Artículos</h1>
    <section class="articulos">
      <ul>
        <?php
        // Mostrar lista de artículos
        foreach ($articulos as $articulo): ?>
          <li><?php echo $articulo['ID'] . '.-' . $articulo['articulo']; ?></li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section class="paginacion">
      <ul>
        <?php
        // Determinamos cuándo estará deshabilitado el botón "Anterior"
        if ($pagina == 1): ?>
          <li class="disabled">&laquo;</li>
        <?php  else: ?>
          <li><a href="?pagina=<?php echo $pagina - 1; ?>">&laquo;</a></li>
        <?php  endif; ?>

        <?php
          // Mostrar números de páginas
          for ($i = 1; $i <= $numeroPaginas ; $i++) { 
            if ($pagina == $i) {
              echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
            } else {
              echo "<li><a href='?pagina=$i'>$i</a></li>";
            }
          }
        ?>

        <?php  
        // Determinamos cuándo estará deshabilitado el botón "Siguiente"
        if ($pagina == $numeroPaginas): ?>
          <li class="disabled">&raquo;</li>
        <?php  else: ?>
          <li><a href="?pagina=<?php echo $pagina + 1; ?>">&raquo;</a></li>
        <?php  endif; ?>
      </ul>
    </section>
  </div>
</body>
</html>
