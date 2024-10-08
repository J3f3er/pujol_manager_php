<?php
require_once "../conexion/conexion.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: GET, POST, PUT DELETE');
header('Access-Control-Allow-Headers: content-Type, Autorization');
header('Allow: GET, POST, PUT, DELETE');

if($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $pdo = Conexion::conectar();
    $sql = "SELECT * FROM usuario WHERE pm_id LIKE :pm_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':pm_id', $id);
    $id = $_POST['id'];
    $stmt->execute();
    
        $resp = $stmt->fetch(PDO::FETCH_ASSOC);

        $array = array(
            'id' => $resp['pm_id'],
            'nombre'   => $resp['pm_nombre'],
            'apellido' => $resp['pm_apellido'],
            'email'    => $resp['pm_correo'],
            'nivel'    => $resp['pm_nivel'],
            'area'     => $resp['pm_area_tel'],
            'tlfn'     => $resp['pm_num_tel'],
        );

        echo json_encode($array, JSON_FORCE_OBJECT);    
}

?>