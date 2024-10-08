<?php
session_start();
require_once "../conexion/conexion.php";

$email = $_SESSION['correo'];

$pdo = Conexion::conectar();

$sql = "SELECT * FROM usuario WHERE pm_correo = :correo";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':correo', $email);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $resultado)
{

}

$_SESSION['id'] = $resultado["pm_id"];
$id = $_SESSION['id'];
$_SESSION['nombre'] = $resultado['pm_nombre'];
$nombre = $_SESSION['nombre'];
$_SESSION['apellido'] = $resultado['pm_apellido'];
$apellido = $_SESSION['apellido'];
$_SESSION['tlfn'] = $resultado['pm_num_tel'];
$tlfn = $_SESSION['tlfn'];
$_SESSION['cont'] = $resultado['pm_contrasena'];
$cont = $_SESSION['cont'];
$_SESSION['fcon'] = $resultado['pm_conf_contrasena'];
$fcon = $_SESSION['fcon'];
$_SESSION['nivel'] = $resultado["pm_nivel"];
$nivel = $_SESSION['nivel'];
/* $_SESSION['avatar'] = $resultado['pm_avatar'];
$avatar = base64_encode($_SESSION['avatar']); */

if(!isset($_SESSION['correo']) || $_SESSION['correo'] == '')
{
    header('Location: http://localhost/pujol_manager/index.php');
    exit;
    
}
else
{
    /* echo 'usuario logueado con el nombre de ' . $_SESSION['usuario'] . ' ' . $_SESSION['apellido']; */
}

$logguedin = false;
if(isset($_SESSION['correo']) && $_SESSION['correo'] != '')
{
    $logguedin = true;
}

$nav = "SELECT *  FROM menu WHERE pm_action LIKE 'nav_1';";
$stmtnav = $pdo->query($nav);
$respnav = $stmtnav->fetchAll(PDO::FETCH_ASSOC);

foreach($respnav as $respnav)
{
    //echo $respnav['pm_html'];
}
require_once "configuracion.php";

/* $loginA = "INSERT INTO actividad (pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, NOW(), :pm_user)";
$stmtLA = $pdo->prepare($loginA);
$stmtLA->execute([
    ":pm_movimiento" => "Inicio Sesión Exitosamente",
    ":pm_boton" => "Login",
    ":pm_user" => $id
]); */
$sqlF = "SELECT * FROM avatar WHERE pm_id_user = :pm_id_user";
$stmtF = $pdo->prepare($sqlF);
$stmtF->execute([':pm_id_user' => $id]);
$respF = $stmtF->fetchAll(PDO::FETCH_ASSOC);
foreach($respF as $respF):
    $avatar = base64_encode($respF['pm_avatar']);
endforeach;

?>