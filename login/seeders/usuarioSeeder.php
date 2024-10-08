<?php
require_once 'conexion.php';

try
{
    $pdo = Conexion::conectar();
    $sql = "INSERT INTO usuario (pm_nombre, pm_apellido, pm_correo, pm_area_tel, pm_num_tel, pm_contrasena, pm_nivel) VALUES (:pm_nombre, :pm_apellido, :pm_correo, :pm_area_tel, :pm_num_tel, :pm_contrasena, :pm_nivel)";
    $stmt = $pdo->prepare($sql);
    echo $stmt->execute([
        'pm_nombre'     => 'Jefferson Jose',
        'pm_apellido'   => 'Bustamante Alvarado',
        'pm_correo'     => 'jjbajb52@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '04163130942',
        'pm_contrasena' => password_hash('j3f3e7s6n', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);
    echo $stmt->execute([
        'pm_nombre'     => 'Veruzka Nathaly',
        'pm_apellido'   => 'Arteaga Montenegro',
        'pm_correo'     => 'vnma1998@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '04145863163',
        'pm_contrasena' => password_hash('Pudindefresa11$', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);
    
    echo $stmt->execute([
        'pm_nombre'     => 'Jefferson Jose',
        'pm_apellido'   => 'Bustamante Alvarado',
        'pm_correo'     => 'jjbajb@hotmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '04163130942',
        'pm_contrasena' => password_hash('j3f3e7s6n', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);
    
    echo $stmt->execute([
        'pm_nombre'     => 'rosmel',
        'pm_apellido'   => 'pujol',
        'pm_correo'     => 'info@pujolmanager.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('info@pujolmanager.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'alejandro',
        'pm_apellido'   => 'jaramillo',
        'pm_correo'     => 'alejaramillo@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('alejaramillo@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'dobleale1',
        'pm_apellido'   => 'dobleale1',
        'pm_correo'     => 'dobleale1@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('dobleale1@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'redeslimonbyte',
        'pm_apellido'   => 'redeslimonbyte',
        'pm_correo'     => 'redeslimonbyte@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('redeslimonbyte@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'alejandra',
        'pm_apellido'   => 'luces',
        'pm_correo'     => 'alejandra.luces542@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('alejandra.luces542@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'rosmel',
        'pm_apellido'   => 'pujol',
        'pm_correo'     => 'rosmelpujol@hotmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('rosmelpujol@hotmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'mieresdem',
        'pm_apellido'   => 'mieresdem',
        'pm_correo'     => 'mieresdem@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('mieresdem@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'rosmel',
        'pm_apellido'   => 'pujol',
        'pm_correo'     => 'rosmelpujol7@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('rosmelpujol7@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'danihelo19',
        'pm_apellido'   => 'danihelo19',
        'pm_correo'     => 'danihelo19@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('danihelo19@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'wolfgangcardenas9986',
        'pm_apellido'   => 'wolfgangcardenas9986',
        'pm_correo'     => 'wolfgangcardenas9986@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('wolfgangcardenas9986@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'rosmely',
        'pm_apellido'   => 'pujol',
        'pm_correo'     => 'pujolrosmely@hotmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('pujolrosmely@hotmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'chrisbronw_21',
        'pm_apellido'   => 'chrisbronw_21',
        'pm_correo'     => 'chrisbronw_21@hotmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('chrisbronw_21@hotmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'cte2534',
        'pm_apellido'   => 'cte2534',
        'pm_correo'     => 'cte2534@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('cte2534@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'anarellaojeda',
        'pm_apellido'   => 'ojeda',
        'pm_correo'     => 'anarella16ojeda@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('anarella16ojeda@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'mildred_974',
        'pm_apellido'   => 'mildred_974',
        'pm_correo'     => 'mildred_974@hotmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('mildred_974@hotmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'ernesto',
        'pm_apellido'   => 'arebolledos',
        'pm_correo'     => 'ernestoarebolledos@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('ernestoarebolledos@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'ibrahim',
        'pm_apellido'   => 'chimino',
        'pm_correo'     => 'chiminoibrahim1984@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('chiminoibrahim1984@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'nevil',
        'pm_apellido'   => 'tovar',
        'pm_correo'     => 'neviltovar@83gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('neviltovar@83gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'franco',
        'pm_apellido'   => 'munero',
        'pm_correo'     => 'francomunero@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('francomunero@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'Pipa1977',
        'pm_apellido'   => 'Pipa1977',
        'pm_correo'     => 'jhoansifontes48@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('jhoansifontes48@gmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'complemento2016',
        'pm_apellido'   => 'complemento2016',
        'pm_correo'     => 'selenyojeda@hotmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '',
        'pm_contrasena' => password_hash('selenyojeda@hotmail.com', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
    ]);

    echo $stmt->execute([
        'pm_nombre'     => 'Jefferson José',
        'pm_apellido'   => 'Bustamante Alvarado',
        'pm_correo'     => 'jjbajb53@gmail.com',
        'pm_area_tel'   => '',
        'pm_num_tel'    => '04163130942',
        'pm_contrasena' => password_hash('j3f3e7s6n', PASSWORD_BCRYPT),
        'pm_nivel'      => '1'
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