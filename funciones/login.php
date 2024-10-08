<?php
require_once "../conexion/conexion.php";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $sql = "SELECT * FROM usuario WHERE pm_correo = :email";
    $stmt = Conexion::conectar()->prepare($sql);
    $stmt->bindParam(':email', $email);
    /* $stmt->bindParam(':contrasena', $clave); */
    $email = $_POST['email'];
    $clave = $_POST['password'];
    $stmt->execute();
    
    if($stmt->rowCount() > 0)
    {
        $resp = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $resp['pm_correo'] . '<br>';
        echo $resp['pm_contrasena'] . '<br>';
        /* echo $clave; */

        password_verify($clave, $resp['pm_contrasena']);        
            echo "La Contraeña es correcta";
//            sleep(15000);
        session_start();
        echo $_SESSION['correo'] = $resp['pm_correo'];
        $loginA = "INSERT INTO actividad (pm_movimiento, pm_boton, pm_hora, pm_user) VALUES (:pm_movimiento, :pm_boton, NOW(), :pm_user)";
        $stmtLA = Conexion::conectar()->prepare($loginA);
        $stmtLA->execute([
            ":pm_movimiento" => "Inicio Sesión Exitosamente",
            ":pm_boton" => "Login",
            ":pm_user" => $resp['pm_id']
        ]);
//        exit;
        header('Location: ../login/dashboard.php');
    }
    else
    {
        echo "Las contraseñas no coinciden o el usuario no existe";
    }
    

    /* if($stmt->rowCount() > 0)
    {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($clave, $usuario['pm_contrasena']))
        {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: ../login/blank.php');
        }
        else
        {
            echo '<div class="alert alert-danger mt-5" role="alert">
            <span>Contraseña incorrecta</span>
            </div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger mt-5" role="alert">
        <span>Por Favor proporcione un usuario existente</span>
        </div>';
    } */
}
?>