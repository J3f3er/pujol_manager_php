<?php
require_once 'conexion.php';

$pdo = Conexion::conectar();

$stmt   = $pdo->query("SELECT * FROM usuario");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result);
?>