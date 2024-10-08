<?php
require_once "../../conexion/conexion.php";
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: GET, POST, PUT DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//header("Allow: GET, POST, PUT, DELETE");
// Set headers for the API response
/* header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *"); // Allow access from any origin
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Allow specific methods
header("Access-Control-Max-Age: 3600"); // Cache access control headers for 1 hour
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"); // Allow specific headers */


/* if($_SERVER["REQUEST_METHOD"] == "GET")
{ */
    
        $id = $_GET["id"];
        $pdo = Conexion::conectar();
        $sqlEditar = "SELECT * FROM usuario WHERE pm_id = :pm_id";
        $stmtEditar = $pdo->prepare($sqlEditar);
        $stmtEditar->bindParam(':pm_id', $id);
        $stmtEditar->execute();
        
            $resultsEditar = $stmtEditar->fetchAll();
            foreach($resultsEditar as $resp)
            {
                echo $resp["pm_edad"];
            }
    
            
            
            $array = array(
                "id" => $resp["pm_id"],
                "nombre" => $resp["pm_nombre"],
                "apellido" => $resp["pm_apellido"],
                "email" => $resp["pm_correo"],
                "area" => $resp["pm_area_tel"],
                "tlfn" => $resp["pm_num_tel"],
                "edad" => $resp["pm_edad"],
                "cont" => $resp["pm_contrasena"],
                "conf" => $resp["pm_conf_contrasena"],
                "nivel" => $resp["pm_nivel"],
            );
    
            echo json_encode($array);    

    
//}

?>