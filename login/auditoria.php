<?php
$pdo = Conexion::conectar();

$sql = "SELECT * FROM actividad WHERE pm_user = :pm_user";
$stmt = $pdo->prepare($sql);
$stmt->execute([":pm_user" => $id]);
$resp = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>