<?php
require_once "../../conexion/conexion.php";

$pdo = Conexion::conectar();
$sql = "INSERT INTO `carrito`(`pm_nombre`, `pm_categoria`, `pm_precio`, `pm_cantidad`, `pm_imagen`, `pm_id_user`, `pm_id_servicio`) VALUES (:pm_nombre, :pm_categoria, :pm_precio, :pm_cantidad, :pm_imagen, :pm_id_user, :pm_id_servicio)";
$stmt = $pdo->prepare($sql);
echo $stmt->execute([
    ':pm_nombre' => 'Timex Unisex Originals',
    ':pm_categoria' => 'Relojes',
    ':pm_precio' => '79.00',
    ':pm_cantidad' => '3',
    'pm_imagen' => file_get_contents('C:/xampp/htdocs/pujol_manager/assets/img/product-1_zrifhn.jpg'),
    'pm_id_user' => '1',
    'pm_id_servicio' => '1'
]);
echo $stmt->execute([
    ':pm_nombre' => 'Smart TV',
    ':pm_categoria' => 'Televisor',
    ':pm_precio' => '99.00',
    ':pm_cantidad' => '3',
    'pm_imagen' => file_get_contents('C:/xampp/htdocs/pujol_manager/login/assets/img/hardbody/images.jpeg'),
    'pm_id_user' => '2',
    'pm_id_servicio' => '2'
]);

echo $stmt->execute([
    ':pm_nombre' => 'Roku',
    ':pm_categoria' => 'Control Roku',
    ':pm_precio' => '184.00',
    ':pm_cantidad' => '7',
    'pm_imagen' => file_get_contents('C:/xampp/htdocs/pujol_manager/login/assets/img/hardbody/descarga.png'),
    'pm_id_user' => '3',
    'pm_id_servicio' => '3'
]);

echo ' Registros Realizados con Exito!!!';

//https://blackbox.ai/share/a2dd4a07-83fc-4d5c-ac33-53c3a2c4ac17

?>