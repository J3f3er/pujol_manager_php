<?php
/* require_once "verificacion.php"; */
// Conexión a la base de datos
/* $dsn = 'mysql:host=localhost;dbname=tu_base_de_datos';
$username = 'tu_usuario';
$password = 'tu_contraseña';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error al conectar a la base de datos: ' . $e->getMessage();
    exit;
} */

$pdo = Conexion::conectar();

// Consulta para obtener el total de registros
$stmt = $pdo->prepare('SELECT COUNT(*) AS total_registros FROM servicios');
$stmt->execute();
$total_registros = $stmt->fetchColumn();

// Cantidad de registros por página
$registros_por_pagina = 10;

// Cálculo del número de páginas
$num_paginas = ceil($total_registros / $registros_por_pagina);

// Página actual
$pagina_actual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;

// Consulta para obtener los registros de la página actual
$stmt = $pdo->prepare('SELECT * FROM servicios LIMIT :inicio, :registros_por_pagina');
$stmt->bindParam(':inicio', ($pagina_actual - 1) * $registros_por_pagina);
$stmt->bindParam(':registros_por_pagina', $registros_por_pagina);
$stmt->execute();
$registros = $stmt->fetchAll();

// Generar la paginación
$pagination = '';
if ($pagina_actual > 1) {
    $pagination .= '<a class="pagination-item" href="?pagina=' . ($pagina_actual - 1) . '"><img src="assets/img/icon_arrow-left.svg" /><span>Previo</span></a>';
}
for ($i = 1; $i <= $num_paginas; $i++) {
    if ($i == $pagina_actual) {
        $pagination .= '<a class="pagination-item active" href="#">' . $i . '</a>';
    } else {
        $pagination .= '<a class="pagination-item" href="?pagina=' . $i . '">' . $i . '</a>';
    }
}
if ($pagina_actual < $num_paginas) {
    $pagination .= '<a class="pagination-item" href="?pagina=' . ($pagina_actual + 1) . '"><span>Siguiente</span><img src="assets/img/icon_arrow-right.svg" /></a>';
}

// Mostrar la paginación
echo '<div id="pagination" class="d-flex justify-content-center">' . $pagination . '</div>';

// Mostrar los registros de la página actual
foreach ($registros as $registro) {
    // Mostrar los datos del registro
    echo $registro['pm_id'] . ' ' . $registro['pm_precio'] . '<br>';
}