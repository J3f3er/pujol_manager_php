<?php
require_once "../conexion/conexion.php";

try {
    // Connect to the database
    $conn = Conexion::conectar();

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO usuario (pm_nombre, pm_apellido, pm_correo, pm_num_tel, pm_contrasena, pm_nivel) VALUES (:pm_nombre, :pm_apellido, :pm_correo, :pm_num_tel, :pm_contrasena, :pm_nivel)");

    // Bind the parameters
    $stmt->bindParam(':pm_nombre', $pm_nombre);
    $stmt->bindParam(':pm_apellido', $pm_apellido);
    $stmt->bindParam(':pm_correo', $pm_correo);
    $stmt->bindParam(':pm_num_tel', $pm_num_tel);
    $stmt->bindParam(':pm_contrasena', $pm_contrasena);
    $stmt->bindParam(':pm_nivel', $pm_nivel);

    // Set the values
    $pm_nombre = $_POST['nombre'];
    $pm_apellido = $_POST['apellido'];
    $pm_correo = $_POST['email'];
    $pm_num_tel = $_POST['select_cod_area'] . $_POST['numre_phone'];
    $pm_contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $pm_nivel = '1';

    // Execute the statement
    $stmt->execute();

    // Close the connection
    $conn = null;

} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}



$data = array(
    "nombre" => $pm_nombre,
    "apellido" => $pm_apellido,
    "correo" => $pm_correo,
    "telefono" => $pm_num_tel,
    "contrasena" => $pm_contrasena,
    "status" => "Positivo",
);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Allow: GET, POST, PUT, DELETE');

echo json_encode($data, JSON_FORCE_OBJECT);

//$pdo = Conexion::conectar();

//if(isset($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['select_cod_area'], $_POST['numre_phone'], $_POST['contrasena'])){
    /* $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['email'];
    $codArea = $_POST['select_cod_area'];
    $phone = $_POST['numre_phone'];
    $telefono = $codArea . $phone;
    $clv = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); */
//}

/*  $sql = "INSERT INTO usuario (pm_id, pm_nombre, pm_apellido, pm_correo, pm_num_tel, pm_contrasena, pm_nivel) VALUES (:pm_id, :pm_nombre, :pm_apellido, :pm_correo, :pm_num_tel, :pm_contrasena, :pm_nivel)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':pm_nombre', $nombre);
    $stmt->bindParam(':pm_apellido', $apellido);
    $stmt->bindParam(':pm_correo', $correo);
    $stmt->bindParam(':pm_num_tel', $telefono);
    $stmt->bindParam(':pm_contrasena', $clv);
    $stmt->bindParam(':pm_nivel', "1");
    $stmt->bindParam('pm_id', '');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['email'];
    $codArea = $_POST['select_cod_area'];
    $phone = $_POST['numre_phone'];
    $telefono = $codArea . $phone;
    $clv = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    $result = $stmt->execute();
    echo $result; */
?>