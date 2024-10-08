<?php
require_once "../../conexion/conexion.php";
require_once "encabezados_api.php";
/* header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: GET, POST, PUT DELETE');
header('Access-Control-Allow-Headers: content-Type, Autorization');
header('Allow: GET, POST, PUT, DELETE');
header("Access-Control-Max-Age: 3600"); */

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $sql = "SELECT * FROM usuario";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();
        $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resp as $key) :
            $usuarios[] = $key;
        endforeach;        
        echo json_encode($usuarios);
        break;
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $sql = "INSERT INTO usuario (pm_nombre, pm_apellido, pm_correo, pm_num_tel, pm_contrasena, pm_conf_contrasena, pm_nivel) VALUES (:pm_nombre, :pm_apellido, :pm_correo, :pm_num_tel, :pm_contrasena, :pm_conf_contrasena, :pm_nivel)";
        $stmt = Conexion::conectar()->prepare($sql);
        $cont = $data['pm_contrasena'];
        $stmt->execute([
            ":pm_nombre" => $data['pm_nombre'],
            ":pm_apellido" => $data['pm_apellido'],
            ":pm_correo" => $data['pm_correo'],
            ":pm_num_tel" => $data['pm_num_tel'],
            ":pm_contrasena" => password_hash($cont, PASSWORD_BCRYPT),
            ":pm_conf_contrasena" => $data['pm_conf_contrasena'],
            ":pm_nivel" => $data['pm_nivel']
        ]);
        echo json_encode(['mensaje' => 'Usuario creado con Exito',
        "nombre" => $data['pm_nombre'],
        "apellido" => $data['pm_apellido'],
        "correo" => $data['pm_correo'],
        "num_tel" => $data['pm_num_tel'],
        "contrasena" => $data['pm_contrasena'],
        "conf_contrasena" => $data['pm_conf_contrasena'],
        "nivel" => $data['pm_nivel']    
    ]);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);
        $sql = "UPDATE usuario SET pm_nombre = :pm_nombre,
        pm_apellido = :pm_apellido,
        pm_correo = :pm_correo,
        pm_num_tel = :pm_num_tel,
        pm_contrasena = :pm_contrasena,
        pm_conf_contrasena = :pm_conf_contrasena,
        pm_nivel = :pm_nivel,
        pm_avatar = :pm_avatar
        WHERE pm_id = :pm_id";
        $stmt = Conexion::conectar()->prepare($sql);
        /* $stmt->bindParam(':pm_nombre', $data['pm_nombre']);
        $stmt->bindParam(':pm_apellido', $data['pm_apellido']);
        $stmt->bindParam(':pm_correo', $data['pm_correo']);
        $stmt->bindParam(':pm_num_tel', $data['pm_num_tel']);
        $stmt->bindParam(':pm_contrasena', password_hash($cont, PASSWORD_BCRYPT));
        $stmt->bindParam(':pm_conf_contrasena', $data['pm_conf_contrasena']);
        $stmt->bindParam(':pm_nivel', $data['pm_nivel']); */
        $cont = $data['pm_contrasena'];
        $stmt->execute([
            ":pm_nombre" => $data['pm_nombre'],
            ":pm_apellido" => $data['pm_apellido'],
            ":pm_correo" => $data['pm_correo'],
            ":pm_num_tel" => $data['pm_num_tel'],
            ":pm_contrasena" => password_hash($cont, PASSWORD_BCRYPT),
            ":pm_conf_contrasena" => $data['pm_conf_contrasena'],
            ":pm_nivel" => $data['pm_nivel'],
            ":pm_avatar" => $data['pm_avatar']
        ]);
        echo json_encode(['mensaje' => 'Usuario Actualizado con Exito!!!']);
        break;
    case 'DELETE':
        $data = json_decode(file_get_contents("php://input"), true);
        $sql = "DELETE FROM usuario WHERE pm_id = :pm_id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute([":pm_id" => $data['pm_id']]);
        echo json_encode(["mensaje" => "Usuario Eliminado con exito: " . $data['pm_id']]);
        break;    
    default:
        echo json_encode(["mensaje" => "No existe el dato solicitado"]);
        break;
}

?>