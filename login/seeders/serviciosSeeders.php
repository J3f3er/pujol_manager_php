<?php
require_once "../conexion/conexion.php";

$pdo = Conexion::conectar();
$consulta = $pdo->prepare("INSERT INTO `servicios`(`pm_nombre_servicio`, `pm_descrition_servicio`, `pm_precio`, `pm_moneda`, `pm_talento`, `pm_usuario`, `pm_dimensiones`, `pm_photo`) VALUES (:pm_nombre_servicio, :pm_descrition_servicio, :pm_precio, :pm_moneda, :pm_talento, :pm_usuario, :pm_dimensiones, :pm_photo)");
echo $consulta->execute([
    ":pm_nombre_servicio" => 'Barra para fondos',
    ":pm_descrition_servicio" => 'Tubo de proceso, Pintura al Horno antideslizante.',
    ":pm_precio" => '100',
    ":pm_moneda" => 'USD',
    ":pm_talento" => '0',
    ":pm_usuario" => '0',
    ":pm_dimensiones" => '47.5 x 60 cm',
    ":pm_photo" => file_get_contents('C:/xampp/htdocs/pujol_manager/assets/img/fullsize/1.jpg')
]);

echo $consulta->execute([
    ":pm_nombre_servicio" => 'Barra pull ups',
    ":pm_descrition_servicio" => 'Tubo de proceso, pintura al horno antideslizante.',
    ":pm_precio" => '3.5',
    ":pm_moneda" => 'EUR',
    ":pm_talento" => '0',
    ":pm_usuario" => '0',
    ":pm_dimensiones" => '1 x 0.40 metros',
    ":pm_photo" => file_get_contents('C:/xampp/htdocs/pujol_manager/assets/img/fullsize/2.jpg')
]);

echo $consulta->execute([
    ":pm_nombre_servicio" => 'Alquiler de Casas',
    ":pm_descrition_servicio" => 'Alquiler de hermosa casa en Cata.',
    ":pm_precio" => '13.5',
    ":pm_moneda" => 'USD',
    ":pm_talento" => '0',
    ":pm_usuario" => '0',
    ":pm_dimensiones" => '1 x 0.40 metros',
    ":pm_photo" => file_get_contents('C:/xampp/htdocs/pujol_manager/assets/img/fullsize/3.jpg')
]);

echo $consulta->execute([
    ":pm_nombre_servicio" => 'Mantenimiento de Computadoras',
    ":pm_descrition_servicio" => 'Mantenimientos de Computadoras.',
    ":pm_precio" => '13.5',
    ":pm_moneda" => 'USD',
    ":pm_talento" => '0',
    ":pm_usuario" => '0',
    ":pm_dimensiones" => '1 x 0.40 metros',
    ":pm_photo" => file_get_contents('C:/xampp/htdocs/pujol_manager/assets/img/fullsize/descarga2.jpeg')
]);

echo $consulta->execute([
    ":pm_nombre_servicio" => 'Alquiler de Vehiculos',
    ":pm_descrition_servicio" => 'Alquiler de Vehiculos.',
    ":pm_precio" => '3000',
    ":pm_moneda" => 'B',
    ":pm_talento" => '0',
    ":pm_usuario" => '0',
    ":pm_dimensiones" => '1 x 0.40 metros',
    ":pm_photo" => file_get_contents('C:/xampp/htdocs/pujol_manager/assets/img/fullsize/descarga1.jpeg')
]);

echo ' Registros realizados con exito!!!';

?>