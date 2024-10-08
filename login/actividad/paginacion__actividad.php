<?php
// Conectamos a la base de datos
$conexion = Conexion::conectar();

// Consultamos el número total de registros en la tabla servicios
$stmt = $conexion->prepare("SELECT COUNT(*) as total_registros FROM actividad WHERE pm_usuario = :pm_usuario");
$stmt->execute([':pm_usuario' => $id]);
$total_registros = $stmt->fetchColumn();

// Establecemos la cantidad de registros por página
$registros_por_pagina = 6;

// Calculamos el número total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Obtenemos la página actual (si no se especifica, se asume la página 1)
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calculamos el límite de registros para la consulta
$limite_inicio = ($pagina_actual - 1) * $registros_por_pagina;

// Consultamos los registros para la página actual
$stmt = $conexion->prepare("SELECT * FROM servicios WHERE actividad = :pm_usuario LIMIT $limite_inicio, $registros_por_pagina");
$stmt->execute([':pm_usuario' => $id]);
$result_actividad = $stmt->fetchAll();

echo '</div>';
echo '</div>';
echo '</div>';

// Mostramos los registros de la página actual
foreach ($result_actividad as $respuesta) {
    // Mostrar los datos del registro
    /* echo '<p>' . $servicios['pm_nombre_servicio'] . '</p>'; */ // Por ejemplo
}
if($nivel == 5)
{
    // Conectamos a la base de datos
$conexion = Conexion::conectar();

// Consultamos el número total de registros en la tabla servicios
$stmt = $conexion->prepare("SELECT COUNT(*) as total_registros FROM actividad");
$stmt->execute();
$total_registros = $stmt->fetchColumn();

// Establecemos la cantidad de registros por página
$registros_por_pagina = 6;

// Calculamos el número total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Obtenemos la página actual (si no se especifica, se asume la página 1)
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calculamos el límite de registros para la consulta
$limite_inicio = ($pagina_actual - 1) * $registros_por_pagina;

// Consultamos los registros para la página actual
$stmt = $conexion->prepare("SELECT * FROM actividad LIMIT $limite_inicio, $registros_por_pagina");
$stmt->execute();
$result_actividad = $stmt->fetchAll();

// Mostramos la paginación
/* echo '<div class="container">';
echo '<div class="row">';
echo '<div id="pagination" class="d-flex justify-content-center">';
 */
// Botón "Anterior"
/* if ($pagina_actual > 1) {
    echo '<a class="pagination-item" href="?pagina=' . ($pagina_actual - 1) . '"><img src="assets/img/icon_arrow-left.svg" /><span>Previos</span></a>';
} else {
    echo '<a class="pagination-item disabled" href="#"><img src="assets/img/icon_arrow-left.svg" /><span>Previos</span></a>';
} */

// Números de página
/* for ($i = 1; $i <= $total_paginas; $i++) {
    if ($i == $pagina_actual) {
        echo '<a class="pagination-item active" href="#">' . $i . '</a>';
    } else {
        echo '<a class="pagination-item" href="?pagina=' . $i . '">' . $i . '</a>';
    }
} */

// Botón "Siguiente"
/* if ($pagina_actual < $total_paginas) {
    echo '<a class="pagination-item" href="?pagina=' . ($pagina_actual + 1) . '"><span>Siguiente</span><img src="assets/img/icon_arrow-right.svg" /></a>';
} else {
    echo '<a class="pagination-item disabled" href="#"><span>Siguiente</span><img src="assets/img/icon_arrow-right.svg" /></a>';
} */

echo '</div>';
echo '</div>';
echo '</div>';

// Mostramos los registros de la página actual
foreach ($result_actividad as $respuesta) {
    // Mostrar los datos del registro
    /* echo '<p>' . $servicios['pm_nombre_servicio'] . '</p>'; */ // Por ejemplo
}
}

?>