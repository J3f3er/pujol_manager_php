<?php
require_once 'conexion.php';

$pdo = Conexion::conectar();

$sql  = "INSERT INTO wp_user (id, nombre) VALUES(:id, :nombre)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $column1);
$stmt->bindParam(':nombre', $column2);

$column1 = "id";
$column2 = "Jefferson";

$result = $stmt->execute();

print_r($result);
?>