<?php
require_once "../../conexion/conexion.php";

$pdo = Conexion::conectar();

$truncate = $pdo->prepare("TRUNCATE TABLE status_carrito");
$truncate->execute();

$sql = "INSERT INTO status_carrito(pm_nombre, pm_description, creado) VALUES (:pm_nombre, :pm_description, CURRENT_TIMESTAMP())";
$stmt = $pdo->prepare($sql);
echo $stmt->execute([
    ':pm_nombre' => 'En Carrito',
    ':pm_description' => 'En este estatus muestra que se encuentra en el carrito los item',
]);
echo $stmt->execute([
    ':pm_nombre' => 'Pago Correcto',
    ':pm_description' => 'En este estatus muestra que el pago fue realizado y queda esperar',
]);
echo $stmt->execute([
    ':pm_nombre' => 'En Espera',
    ':pm_description' => 'En este estatus muestra que se encuentra en el espera de ser aprobado',
]);
echo $stmt->execute([
    ':pm_nombre' => 'Aprobado',
    ':pm_description' => 'En este estatus muestra que se encuentra aprobado los item por el usuario dueño del item',
]);
echo $stmt->execute([
    ':pm_nombre' => 'Rechazado',
    ':pm_description' => 'En este estatus muestra que se encuentra rechazado el pedido',
]);

echo " Registros Realizados con Exito!!!";
/* INSERT INTO `status_carrito`(`pm_nombre`, `pm_description`, `creado`) VALUES ('En Carrito','En este estatus muestra que se encuentra en el carrito los item', CURRENT_TIMESTAMP()),
('En Espera','En este estatus muestra que se encuentra en el espera de ser aprobado', CURRENT_TIMESTAMP()),
('Aprobado','En este estatus muestra que se encuentra aprobado los item por el usuario dueño del item', CURRENT_TIMESTAMP()),
('Rechazado','En este estatus muestra que se encuentra rechazado el pedido', CURRENT_TIMESTAMP()) */

?>