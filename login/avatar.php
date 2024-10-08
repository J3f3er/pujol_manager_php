<?php
require_once "verificacion.php";

$pdo = Conexion::conectar();

if($_FILES['image'] && $_FILES['image']['error'] == '0')
{
    $imgName = $_FILES['image']['name'];
    $imgSize = $_FILES['image']['size'];
    $imgTemp = $_FILES['image']['tmp_name'];

    $check = getimagesize($imgTemp);
    if($check !== false)
    {
        $sqlimg = "UPDATE usuario SET pm_nombre = :nombre,
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
                
        $id = $_SESSION['id'];
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
        $correo = $_SESSION['correo'];
        $area = $_SESSION['area'];
        $numtlf = $_SESSION['tlfn'];
        $edad = $_SESSION['edad'];
        $cont = $_SESSION['cont'];
        $hash = password_hash($cont, PASSWORD_BCRYPT);
        $nivel = $_SESSION['nivel'];

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
        $stmt_update->bindParam(':pm_avatar', $fRead, PDO::PARAM_LOB);

        $fFile = fopen($imgTemp, 'rb');
        $fRead = fread($fFile, $imgSize);
        fclose($fFile);

        $stmt->execute();

        header('Location: success.php');
    }
    else
    {
        echo 'El archivon no es una imagen';
    }
}
else
{
    echo 'No se ha seleccionado ninguna imagen';
}

?>