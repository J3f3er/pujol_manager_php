<?php
require_once "../conexion/conexion.php";
$conn = Conexion::conectar();
$sql = "INSERT INTO actividad (pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, :pm_hora, :pm_user)";
$stmt = $conn->prepare($sql);
echo $stmt->execute([
    ":pm_movimiento" => "Registro un usuario",
    ":pm_boton" => "Registrar Usuario",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);
echo $stmt->execute([
    ":pm_movimiento" => "Actualizo un usuario",
    ":pm_boton" => "Actualizar Usuario",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);
echo $stmt->execute([
    ":pm_movimiento" => "Elimino un usuario",
    ":pm_boton" => "Eliminar usuario",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);
echo $stmt->execute([
    ":pm_movimiento" => "Registro un Producto",
    ":pm_boton" => "Registrar Producto",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);
echo $stmt->execute([
    ":pm_movimiento" => "Elimino un producto",
    ":pm_boton" => "Eliminar Producto",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);
echo $stmt->execute([
    ":pm_movimiento" => "Actualizo un producto",
    ":pm_boton" => "Actualizar Producto",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);
echo $stmt->execute([
    ":pm_movimiento" => "Inicio Sesión",
    ":pm_boton" => "Login",
    ":pm_hora" => now(),
    ":pm_user" => "3",
]);

?>