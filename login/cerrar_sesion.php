<?php
require_once "verificacion.php";
/* session_start(); */
session_unset();
session_destroy();

$pdo = Conexion::conectar();

$sqlA = "INSERT INTO actividad(pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, NOW(), :pm_user)";
$stmtA = $pdo->prepare($sqlA);
$stmtA->execute([
    ':pm_movimiento' => 'SALIDA',
    ':pm_boton' => 'Cerrar Sesión',
    ':pm_user' => $id
]);

//self::$pdo = null;

header('Location: ../index.php');

?>