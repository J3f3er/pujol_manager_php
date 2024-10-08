<?php
require_once '../../conexion/conexion.php';

try
{
    $pdo = Conexion::conectar();
    $sql = "INSERT INTO avatar (pm_id_user, pm_avatar) VALUES (:pm_id_user, :pm_avatar)";
    $stmt = $pdo->prepare($sql);
    echo $stmt->execute([
        'pm_id_user' => '1',
        'pm_avatar' => file_get_contents('C:\xampp\htdocs\pujol_manager\assets\img\fullsize\casadeplaya.jpg')
    ]);
    echo $stmt->execute([
        'pm_id_user' => '2',
        'pm_avatar' => file_get_contents('C:\xampp\htdocs\pujol_manager\assets\img\fullsize\alquiler-de-castillo-inflable.jpg')
    ]);
    
    echo $stmt->execute([
        'pm_id_user' => '3',
        'pm_avatar' => file_get_contents('C:\xampp\htdocs\pujol_manager\assets\img\fullsize\descarga2.jpeg')
    ]);
    
    echo $stmt->execute([
        'pm_id_user' => '4',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '5',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '6',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '7',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '8',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '9',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '10',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '11',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '12',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '13',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '14',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '15',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '16',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '17',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '18',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '19',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '20',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '21',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '22',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '23',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '24',
        'pm_avatar' => ''
    ]);

    echo $stmt->execute([
        'pm_id_user' => '25',
        'pm_avatar' => ''
    ]);

    /* $sqlCliente = "INSERT INTO `cliente`(`pm_id`, `pm_nombre`, `pm_apellido`, `pm_cedula`, `pm_direccion`) VALUES (:pm_id, :pm_nombre, :pm_apellido, :pm_cedula, :pm_direccion)";
    $stmtCliente = $pdo->prepare($sqlCliente);
    echo $stmtCliente->execute([
        'pm_id' => 1,
    ]); */

}
catch(PDOException $jj)
{
    echo 'Error: ' . $jj->getMessage();
}

?>