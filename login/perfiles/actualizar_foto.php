<?php
require_once "../../conexion/conexion.php";
$pdo = Conexion::conectar();
$consulta = $pdo->prepare("UPDATE avatar SET pm_avatar = :pm_avatar WHERE pm_id_user = :pm_id_user");
/* $consulta = $pdo->prepare("UPDATE usuario SET pm_avatar = :pm_avatar WHERE pm_id = :pm_id"); */
$consulta->bindParam(":pm_id_user", $pm_id_user, PDO::PARAM_INT);
$consulta->bindParam(":pm_avatar", $files);
$pm_id_user = $_POST['pm_id'];
$files = file_get_contents($_FILES['file_foto']['tmp_name']);
$consulta->execute();

$sql = "INSERT INTO actividad (pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, NOW(), :pm_user)";
$resp = $pdo->prepare($sql);
$resp->execute([
    ":pm_movimiento" => "Actualizo la foto de perfil con exito",
    ":pm_boton" => "Actualizar Foto",
    ":pm_user" => $_POST["pm_id"]
]);
echo "¡¡¡Foto actualizada con exito!!!";

?>