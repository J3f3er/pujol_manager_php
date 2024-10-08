<?php
require_once "verificacion.php";
$pdo = Conexion::conectar();
$sql = "INSERT INTO servicios (pm_nombre_servicio, pm_descrition_servicio, pm_precio, pm_moneda, pm_talento, pm_usuario, pm_nivel, pm_dimensiones, pm_photo) VALUES (:pm_nombre_servicio, :pm_descrition_servicio, :pm_precio, :pm_moneda, :pm_talento, :pm_usuario, :pm_nivel, :pm_dimensiones, :pm_photo)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':pm_nombre_servicio' => $_POST['serv_nomb'],
    ':pm_descrition_servicio' => $_POST['serv_desc'],
    ':pm_precio' => $_POST['serv_precio'],
    ':pm_moneda' => $_POST['serv_moneda'],
    ':pm_talento' => '',
    ':pm_usuario' => $_POST['serv_id'],
    ':pm_nivel' => $_POST['serv_rol'],
    ':pm_dimensiones' => $_POST['serv_dimensiones'],
    ':pm_photo' => file_get_contents($_FILES['serv_image']['tmp_name'])
    /* ':pm_photo' => file_get_contents($_FILE['serv_image']['tmp_name']) */
]);

$sqlA = "INSERT INTO actividad (pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, NOW(), :pm_user)";
$stmtA = $pdo->prepare($sqlA);
$stmtA->execute([
    ':pm_movimiento' => 'Servicio creado: ' . $_POST['serv_nomb'],
    ':pm_boton' => 'Crear servicio',
    ':pm_user' => $_POST['serv_id']
]);

/* header("Content-Type: application/json");
$json = array(
    "nombre" => $_POST['nombre'],
    "description" => $_POST['descr'],
    "precio" => $_POST['precio'],
    "moneda" => $_POST['moneda'],
    "dimensiones" => $_POST['serv_dimensiones'],
    "photo" => file_get_contents($_FILE['foto']['tmp_name']),
); */

//https://www.blackbox.ai/share/d0ae5770-9dad-4753-8277-0d930265ca8d
//video: https://www.blackbox.ai/share/eb2d7b24-3e05-43e1-8a91-6274a230464a
?>