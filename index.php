<?php

// Establecer conexión con la base de datos
try {
  $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
  die('<br>Error en la conexión con el servidor.');
}

// Tomar el valor de la página de la URL para comprobar en qué página estamos
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Posts a mostrar por página
$postsPorPagina = 5;

// Determiar el post por el que comenzar a listar en la página actual
$inicio = ($pagina > 1) ? ($pagina * $postsPorPagina - $postsPorPagina) : 0;

// Preparar consulta para traer de la base de datos los artículos para mostrar
$articulos = $conexion->prepare("
  SELECT SQL_CALC_FOUND_ROWS * FROM articulos
  LIMIT $inicio, $postsPorPagina
");

// Ejecutar consulta
$articulos->execute();
// Guardar array de artículos (resultados de la consulta)
$articulos = $articulos->fetchAll();

// Redireccionar al index si no hay artículos para mostrar
if (!$articulos) {
  header('Location: index.php');
}

// Calcular el total de artículos que hay en la base de datos
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

// Calcular número de páginas que necesitamos para mostrar todos los artículos
$numeroPaginas = ceil($totalArticulos / $postsPorPagina);

require_once './view/index.view.php';
?>
