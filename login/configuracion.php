<?php

$pdo = Conexion::conectar();

$sql = "SELECT * FROM configuracion";
$configuracion = $pdo->query($sql);
$c = $configuracion->fetchAll(PDO::FETCH_ASSOC);
foreach($c as $p)
{
    $ph = base64_encode($p["pm_photo"]);
    /* echo $ph; */
}
/* foreach($configuracion as $configuracionM){} */
//var_dump($c);

?>