<?php
class Conexion{
    private static $pdo;

    public static function conectar(){
        try {
            self::$pdo = new PDO("mysql:host=localhost; dbname=pujol_manager_php;", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $th) {
            echo "Error: " . $th->getMessage();
        }
        return self::$pdo;
    }
}

?>


<?php
//session_start();

// Check if the user is logged in
//if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page
  //  header('Location: http://localhost/pujol_manager/index.php');
    //exit;
//}

// Your code for the blank.php page goes here
?>