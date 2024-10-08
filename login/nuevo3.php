<?php
// Conectamos a la base de datos
$conexion = Conexion::conectar();

// Consultamos el número total de registros en la tabla servicios
$stmt = $conexion->prepare("SELECT COUNT(*) as total_registros FROM servicios");
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
$stmt = $conexion->prepare("SELECT * FROM servicios LIMIT $limite_inicio, $registros_por_pagina");
$stmt->execute();
$result_servicios = $stmt->fetchAll();

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
foreach ($result_servicios as $servicios) {
    // Mostrar los datos del registro
    /* echo '<p>' . $servicios['pm_nombre_servicio'] . '</p>'; */ // Por ejemplo
}
/* echo '
<div class="container-fluid">
<h3 class="text-dark mb-5">Servicios</h3>
    <div id="block" class="mt-5 mx-5">
    <div class="container">
        <div class="row">';
            
                if($registro["pm_moneda"] == 'USD') { $moneda = '$'; } elseif($registro["pm_moneda"] == 'EUR') { $moneda = '€'; } elseif ($registro["pm_moneda"] == 'B') { $moneda = 'Bs'; }
                $photo = base64_encode($registro["pm_photo"]);
                echo '
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4 class="text-center" style="margin-top: 12px;color: rgb(255,109,0);">'. $registro["pm_nombre_servicio"] .'<br></h4>
                    <hr style="margin-top: 2px;">
                    <p class="text-center"><strong>'. $registro["pm_dimensiones"] .'</strong><br></p>
                    <img class="card-img w-100 d-block" src="data:image/jpeg;base64,'.$photo.'" width="218" height="218">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-3">
                                <span class="input-group-text far fa-eye" id="view_detalles" name="'.$registro["pm_id"].'"></span>
                            </div>
                        </div>
                        <h1 class="text-center" style="color: rgb(255,255,255);background-color: #9E141A;font-size: 18px;">Descripción</h1>
                        <p class="text-center card-text" style="font-size: 13px;"> '. $registro["pm_descrition_servicio"] .' <br></p>
                        <p class="text-center card-text" style="font-size: 13px;">Precio: '. $registro["pm_precio"] . ' ' . $moneda .'<br></p>
                        <div class="row">
                            <div class="col-12">
                                <input class="form-control" type="number" name="" id="">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-info w-100 h-100 text-center text-white">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
    </div>
</div>
'; */
?>