<?php
require_once "../conexion/conexion.php";

$pdo = Conexion::conectar();
$consulta = $pdo->prepare("DELETE FROM `carrito` WHERE `pm_id` = :id");
$consulta->execute([
    ':id' => $_POST['id']
]);

//sleep(3000);

echo "Elemento Eliminado con Exito!!!";

?>