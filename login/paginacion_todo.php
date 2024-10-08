<?php

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Use assoc arrays by default
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmtTalento = $pdo->prepare("SELECT * FROM talentos LIMIT :limit OFFSET :offset");
    $stmtTalento->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmtTalento->bindParam(":offset", $offset, PDO::PARAM_INT);
    $stmtTalento->execute();

/* class Talento {
    private static $pdo;

   public static function conectar() {
        try {
            self::$pdo = new PDO("mysql:host=localhost; dbname=pujol_manager_php;", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            echo "Error: ". $th->getMessage();
        }
        return self::$pdo;
    }

    public static function getTalentos($limit, $offset) {
        $stmtTalento = self::$pdo->prepare("SELECT * FROM talentos LIMIT :limit OFFSET :offset");
        $stmtTalento->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmtTalento->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmtTalento->execute();
        return $stmtTalento->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function countTalentos() {
        $stmtTalento = self::$pdo->prepare("SELECT COUNT(*) as total FROM talentos");
        $stmtTalento->execute();
        return $stmtTalento->fetchColumn();
    }
} */
?>