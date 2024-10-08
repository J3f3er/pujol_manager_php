<?php
require_once "../conexion/conexion.php";

//if($_SERVER['REQUEST_METHOD'] === 'POST')
//{
    try
    {
        $pdo = Conexion::conectar();
    
    $stmt = $pdo->prepare("UPDATE usuario SET pm_nombre = :pm_nombre, pm_apellido = :pm_apellido WHERE pm_id = :pm_id");
    $stmt->bindParam(':pm_nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':pm_email', $email);
    $stmt->bindParam(':pm_id', $id);
    $id       = $_POST['id'];
    $nombre   = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    //$email    = $_POST["email"];
    $stmt->execute();

header('Content-Type: application/json');
/* header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: GET, POST, PUT DELETE');
header('Access-Control-Allow-Headers: content-Type, Autorization');
header('Allow: GET, POST, PUT, DELETE'); */

    $array = array(
        "Status" => "Correcto"
    );

    echo json_encode($array);
    
}
catch(PDOException $th)
{
    echo 'Error: ' . $th->getMessage();
}


//}

?>