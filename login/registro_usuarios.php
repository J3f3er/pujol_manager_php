<?php
session_start();
require_once "../conexion/conexion.php";

try
{
    $pdo = Conexion::conectar();
    
    $sql = "INSERT INTO usuario (pm_nombre, pm_apellido, pm_correo, pm_area_tel, pm_num_tel, pm_contrasena, pm_conf_contrasena, pm_nivel) VALUES (:pm_nombre, :pm_apellido, :pm_correo, :pm_area_tel, :pm_num_tel, :pm_contrasena, :pm_conf_contrasena, :pm_nivel)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':pm_nombre', $nombre);
    $stmt->bindParam(':pm_apellido', $apellido);
    $stmt->bindParam(':pm_correo', $email);
    $stmt->bindParam(':pm_area_tel', $area);
    $stmt->bindParam(':pm_num_tel', $tlfn);
    $stmt->bindParam(':pm_contrasena', $contrasena);
    $stmt->bindParam(':pm_conf_contrasena', $contrasenaC);
    $stmt->bindParam(':pm_nivel', $roles);
    $nombre = $_POST['reg_nomb'];
    $apellido = $_POST['reg_apell'];
    $contrasena = password_hash($_POST['reg_clv'], PASSWORD_BCRYPT) ;
    $contrasenaC = $_POST['reg_clv'];
    $email = $_POST['reg_email'];
    $area = $_POST['reg_area'];
    $tlfn = $_POST['reg_tlfn'];
    $roles = $_POST['reg_rol'];
    $stmt->execute();
    $id = $pdo->lastInsertId();

    

        //echo "Registro realizado con exito";
        $table = '
            <tr>
            <td>'.$id.'</td>
            <td>'.$nombre.'</td>
            <td>'.$apellido.'</td>
            <td>'.$email.'</td>
            <td>'.$area.''.$tlfn.'</td>
            <td>'.$roles.'</td>
            </tr>
        ';
        $mensaje = "Registro realizado con exito";
        $alerta = '<div class="col-md-12 alert-col relative">
        <div class="alert alert-info alert-dismissible absolue center" role="alert"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button><span id="span_mensaje">Registro realizado con exito!!!</span></div>
    </div>';
        $respuesta = [
            'id' => $id,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $email,
            'area' => $area,
            'telefono' => $tlfn,
            'rol' => $roles,
            'mensaje' => $mensaje,
            'alert' => $alerta,
            'tabla' => $table,
        ];
        
        
    }
    catch(PDOException $j)
    {
        echo "Error: " . $j->getMessage();
    }
    
    header('Content-Type: application/json');
    echo json_encode($respuesta, JSON_FORCE_OBJECT);
?>