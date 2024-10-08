<?php
require_once "verificacion.php";
/* error_reporting(E_ALL);
ini_set('display_errors', 1); */
//require_once "verificacion.php";
//require_once "../conexion/conexion.php";

//require_once "verificacion.php";

// Definir la información de conexión


// Crear una nueva conexión PDO
$pdo = Conexion::conectar();
$sqlCarrito = "SELECT * FROM `carrito` WHERE pm_id_user = :pm_id_user AND pm_status = 0";
$stmt = $pdo->prepare($sqlCarrito);
/* $stmt->bindParam(':pm_id_user', $id); */
$stmt->execute([':pm_id_user' => $id]);
$resp = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* $sqlCarritoS = "SELECT SUM(pm_precio) As TotalP  FROM `carrito` WHERE pm_id_user = :pm_id_user";
$stmtSC = $pdo->prepare($sqlCarritoS);
$stmtSC->bindParam(':pm_id_user', $id);
$stmtSC->execute();
$respSC = $stmtSC->fetchAll(PDO::FETCH_ASSOC); */
/* <span class="text-muted font-weight-normal font-italic d-block">Categoria: '.$respuesta['pm_categoria'].'</span> */
if($stmt->rowCount() > 0){
foreach($resp as $respuesta):
    echo '
        <tr>
            <th class="border-0" scope="row">
                <div class="p-2">
                    <img class="img-fluid rounded shadow-sm" src="data:image/jpeg;base64,'.base64_encode($respuesta['pm_imagen']).'" alt width="70" />
                    <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a class="text-dark d-inline-block align-middle" href="#">'.$respuesta['pm_nombre'].'</a></h5>
                    </div>
                </div>
            </th>
            <td class="border-0 align-middle"><strong>$'.$respuesta['pm_precio'].'</strong></td>
            <td class="border-0 align-middle"><strong>'.$respuesta['pm_cantidad'].'</strong></td>
            <td class="border-0 align-middle"><strong>'.$respuesta['pm_fecha'].'</strong></td>
            <td class="border-0 align-middle"><strong>'.$respuesta['pm_Fcreado'].'</strong></td>
            <td class="border-0 align-middle"><a type="button" class="text-dark" id="btn_del_serv" name="'.$respuesta["pm_id"].'"><i class="fa fa-trash"></i></a></td>
        </tr>
        ';
    endforeach;
}else
{
    echo '
        <tr>
            <th class="border-0" scope="row" width="100%">
                <div class="p-2">                    
                    <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a class="text-dark d-inline-block align-middle" href="#">No tiene Nada en el <strong>CARRITO</strong></a></h5>
                    </div>
                </div>
            </th>
        </tr>
        ';
}

// Utilizar la conexión
/* if ($nivel == '1') {
    // Realizar consultas, insertar, actualizar o eliminar registros
    // ...
    $sqlCarrito = "SELECT * FROM `carrito` WHERE pm_id_user = :pm_id_user";
    $stmt = $pdo->prepare($sqlCarrito);
    $stmt->bindParam(':pm_id_user', $id);
    $stmt->execute();

    $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($resp as $respuesta)
    {
        $avatar = base64_encode($respuesta["pm_imagen"]);
        
        echo '
        
        <tr>
            <th class="border-0" scope="row">
                <div class="p-2">
                    <img class="img-fluid rounded shadow-sm" src="data:image/jpeg;base64,'.$avatar.'" alt width="70" />
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"><a class="text-dark d-inline-block align-middle" href="#">'.$respuesta["pm_nombre"].'</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Categoria: '.$respuesta["pm_categoria"].'</span>
                        </div>
                </div>
            </th>
            <td class="border-0 align-middle"><strong>'.$respuesta["pm_precio"].'</strong></td>
            <td class="border-0 align-middle"><strong>'.$respuesta["pm_cantidad"].'</strong></td>
            <td class="border-0 align-middle"><a type="button" class="text-dark" id="btn_del_serv" name="'.$respuesta["pm_id"].'"><i class="fa fa-trash"></i></a></td>
        </tr> 
        ';
    } */
        
    /* $response = ["id" => $_SESSION["id"], "categoria" => $respuesta["pm_categoria"]]; */
    /* $response = ["categoria" => $respuesta["pm_categoria"]];
    header('Content-Type: application/json');
    echo json_encode($response, JSON_FORCE_OBJECT); */

    // Cerrar la conexión
    /* $pdo = null;
}elseif ($nivel == '5') { */
    // Realizar consultas, insertar, actualizar o eliminar registros
    // ...
/*     $sqlCarrito = "SELECT * FROM `carrito`";
    $stmt = $pdo->prepare($sqlCarrito);
    $stmt->execute();

    $resp = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($resp as $respuesta)
    {
        $avatar = base64_encode($respuesta["pm_imagen"]);
        echo '
        
        <tr>
            <th class="border-0" scope="row">
                <div class="p-2">
                    <img class="img-fluid rounded shadow-sm" src="data:image/jpeg;base64,'.$avatar.'" alt width="70" />
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"><a class="text-dark d-inline-block align-middle" href="#">'.$respuesta["pm_nombre"].'</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Categoria: '.$respuesta["pm_categoria"].'</span>
                        </div>
                </div>
            </th>
            <td class="border-0 align-middle"><strong>'.$respuesta["pm_precio"].'</strong></td>
            <td class="border-0 align-middle"><strong>'.$respuesta["pm_cantidad"].'</strong></td>
            <td class="border-0 align-middle"><a type="button" class="text-dark" id="btn_del_serv" nombre="'.$respuesta["pm_nombre"].'" categoria="'.$respuesta["pm_categoria"].'" name="'.$respuesta["pm_id"].'"><i class="fa fa-trash"></i></a></td>
        </tr> 
        ';
        
    }

    // Cerrar la conexión
    $pdo = null;
} */

?>