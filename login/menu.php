<?php 
//echo $resultado['pm_nivel'];
    $menu_sql = "SELECT * FROM `menu` WHERE `pm_action` LIKE '%sidebar_1%' AND `pm_nivel` LIKE '%".$resultado['pm_nivel']."%'";
        try
            {
                $stmt_menu = $pdo->query($menu_sql);
                $result_menu = $stmt_menu->fetchAll(PDO::FETCH_ASSOC);
                foreach($result_menu as $resultado_menu)
                {
                    echo $resultado_menu['pm_html'];
                }
            }
            catch(PDOException $e)
            {
                die('Query Failed: ' . $e->getMessage());
            }
            
?>
