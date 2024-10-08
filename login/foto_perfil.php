<?php
$pdo = Conexion::conectar();
$sqlF = "SELECT * FROM avatar WHERE pm_id_user = :pm_id_user";
$stmtF = $pdo->prepare($sqlF);
$stmtF->execute([':pm_id_user' => $id]);
$respF = $stmtF->fetchAll(PDO::FETCH_ASSOC);
foreach($respF as $respF):
    $avatar = base64_encode($respF['pm_avatar']);
endforeach;


?>