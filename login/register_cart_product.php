<?php
require_once "verificacion.php";
require_once "apis/encabezados_api.php";
$pdo = Conexion::conectar();
//$total_mount = $_POST['pm_cantidad'];
$sqlI = "SELECT pm_photo as foto FROM servicios WHERE pm_id = :pm_id";
$stmtI = $pdo->prepare($sqlI);
$stmtI->execute([':pm_id' => $_POST['producto_id']]);
$currentImagen = $stmtI->fetchColumn();
$sql = "INSERT INTO carrito (pm_nombre, pm_precio, pm_cantidad, pm_imagen, pm_id_user, pm_id_servicio, pm_fecha, pm_Fcreado) VALUES(:pm_nombre, :pm_precio, :pm_cantidad, :pm_imagen, :pm_id_user, :pm_id_servicio, :pm_fecha, NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':pm_nombre' => $_POST['producto_nombre'],
    ':pm_precio' => $_POST['cantidad_total'],
    ':pm_cantidad' => $_POST['quantity_cantidad'],
    ':pm_imagen' => $currentImagen,
    ':pm_id_user' => $_POST['producto_user'],
    ':pm_id_servicio' => $_POST['producto_id'],
    ':pm_fecha' => $_POST['date_fecha']
]);

$sqlA = "INSERT INTO actividad (pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, NOW(), :pm_user)";
$stmtA = $pdo->prepare($sqlA);
$stmtA->execute([
    ':pm_movimiento' => 'Registro Servicio en el Carrito: ' . $_POST['producto_nombre'],
    ':pm_boton' => 'Añadir al Carrito',
    ':pm_user' => $_POST['producto_user']
]);

/* echo "Registro Realizado con exito"; */
$response = array(
    "Status" => "Positivo",
    "Mensaje" => "Registro Realizado Con Exito"
);

echo json_encode($response);

?>