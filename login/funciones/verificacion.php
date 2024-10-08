<?php
session_start();
require_once "../../conexion/conexion.php";
/* echo $_SESSION['correo']; */
/* $email = $_SESSION['correo']; */
$email = $_POST['email'];

$pdo = Conexion::conectar();

$sql = "SELECT * FROM usuario WHERE pm_correo = :correo";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':correo', $email);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $resultado)
{
/*  echo $resultado['pm_contrasena'] . '<br>';
    echo $resultado['pm_nombre'] . '<br>'; */
}

/* echo $_SESSION['contrasena'] = $resultado['pm_contrasena'] . '<br>' . $_SESSION['apellido'] = $resultado['pm_apellido'] . '<br>'; */

$_SESSION['id'] = $resultado["pm_id"];
$id = $_SESSION['id'];
$_SESSION['nombre'] = $resultado['pm_nombre'];
$nombre = $_SESSION['nombre'];
$_SESSION['apellido'] = $resultado['pm_apellido'];
$apellido = $_SESSION['apellido'];
/* $_SESSION['edad'] = $resultado['pm_edad'];
$edad = $_SESSION['edad']; */
/* $_SESSION['area'] = $resultado['pm_area_tel'];
$area = $_SESSION['area']; */
$_SESSION['tlfn'] = $resultado['pm_num_tel'];
$tlfn = $_SESSION['tlfn'];
$_SESSION['cont'] = $resultado['pm_contrasena'];
$cont = $_SESSION['cont'];
$_SESSION['fcon'] = $resultado['pm_conf_contrasena'];
$fcon = $_SESSION['fcon'];
$_SESSION['nivel'] = $resultado["pm_nivel"];
$nivel = $_SESSION['nivel'];
//echo $id;
//echo $nivel;

/* $array = array(
    'area' => $resultado['pm_area_tel'],
); */

//echo json_encode($array, JSON_FORCE_OBJECT);

?>