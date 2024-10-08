<?php
//require_once "../conexion/conexion.php";

$pdo = Conexion::conectar();
$consulta = $pdo->prepare("SELECT SUM(pm_precio) As total FROM `carrito`");
$consulta->execute();
$consultaPay = $consulta->fetch(PDO::FETCH_ASSOC);

$pdo = null;

echo "la suma total de todos los campos es: " . $consultaPay["total"];

?>