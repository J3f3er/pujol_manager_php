<?php
//session_start();
require_once "verificacion.php";
//require "../../conexion/conexion.php";
try {

/*     echo 'Igrese el valor del id: ';
    $id = readline();
    echo 'ingrese el valor del nombre: ';
    $nombre = readline();
    echo 'ingrese el valor del apellido: ';
    $apellido = readline();
    echo 'Igrese el valor del correo: ';
    $correo = readline();
    echo 'ingrese el valor del codigo de area: ';
    $area = readline();
    echo 'ingrese el valor del numero de telefono: ';
    $numtlf = readline();
    echo 'Igrese el valor del edad: ';
    $edad = readline();
    echo 'ingrese el valor del contrasena: ';
    $cont = readline();
    $hash = password_hash($cont, PASSWORD_BCRYPT);
    echo 'ingrese el valor del nivel de usuario: ';
    $nivel = readline(); */

        
        $pdo = Conexion::conectar();
        //global $conn;
        
        $sql_update = "UPDATE usuario SET pm_nombre = :nombre,
         pm_apellido = :apellido,
         pm_correo = :pm_correo,
         pm_area_tel = :pm_area_tel,
         pm_num_tel = :pm_num_tel,
         pm_edad = :pm_edad,
         pm_contrasena = :pm_contrasena,
         pm_conf_contrasena = :pm_conf_contrasena,
         pm_nivel = :pm_nivel,
         pm_avatar = :pm_avatar
         WHERE pm_id = :id";

        $stmt_update = $pdo->prepare($sql_update);
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email'];
        $area = $_POST['area'];
        $numtlf = $_POST['telefono'];
        $edad = $_POST['edad'];
        $cont = $_POST['contrasena'];
        $hash = password_hash($cont, PASSWORD_BCRYPT);
        $nivel = $_POST['nivel'];
        
        $stmt_update->bindParam(':id', $id);
        $stmt_update->bindParam(':nombre', $nombre);
        $stmt_update->bindParam(':apellido', $apellido);
        $stmt_update->bindParam(':pm_correo', $correo);
        $stmt_update->bindParam(':pm_area_tel', $area);
        $stmt_update->bindParam(':pm_num_tel', $numtlf);
        $stmt_update->bindParam(':pm_edad', $edad);
        $stmt_update->bindParam(':pm_contrasena', $hash);
        $stmt_update->bindParam(':pm_conf_contrasena', $cont);
        $stmt_update->bindParam(':pm_nivel', $nivel);
        $stmt_update->bindParam(':pm_avatar', $avatar);

        $stmt_update->execute();

        /* $response = array(
            'status' => 'Correcto',
            'Mensaje' => 'Actualización realizada con exito',
            'id' => $id,
            'nombre' => $nombre,
        ); */

        if($stmt_update->rowCount() > 0)
        {
            $response = ['status' => 'Correcto', 
                         'Mensaje' => 'Actualización realizada con exito',
                         'id' => $id,
                         'nombre' => $nombre,
                         'hash' => $hash,
                         'avatar' => $avatar
                        ];
        }
        else
        {
            $response = ['status' => 'Error', 'Mensaje' => 'fallido todo'];
        }   
            /* $response = ['status' => 'Error', 'Mensaje' => 'fallido todo']; */
        
            echo json_encode($response, JSON_FORCE_OBJECT);

    } catch (PDOException $e) {
        $response = ['status' => 'error', 'Mensaje' => 'Error al registrar porque no colocaron todos los campos de la base de datos como lo indica el siguiente error: ' . $e->getMessage()];
    }
?>