<?php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Use assoc arrays by default
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$pagination_servicios = 'SELECT * FROM servicios';
$pdoStatement = $pdo->query($pagination_servicios);

$total_of_rows = $pdoStatement->rowCount();

$limit2 = 10;

$page_servicioss = ceil($total_of_rows / $limit2);

if (!isset($_GET['page_servicios'])) {
    $page_servicios = 1;
} else {
    $page_servicios = $_GET['page_servicios'];
}

$page_servicios = filter_var($page_servicios, FILTER_SANITIZE_NUMBER_INT);

$offset = ($page_servicios - 1) * $limit2;

$pagination_servicios = 'SELECT * FROM servicios LIMIT ?, ?';
$pega_servicios = $pdo->prepare($pagination_servicios);
$pega_servicios->bindParam(1, $offset, PDO::PARAM_INT);
$pega_servicios->bindParam(2, $limit2, PDO::PARAM_INT);
$pega_servicios->execute();

$result_servicios = $pega_servicios->fetchAll();

/* for ($i = 0; $i < count($result_servicios); $i++) {
    echo 'ID: ' . $result_servicios[$i]['pm_id'] . ' | Nombre: ' . $result_servicios[$i]['pm_nombre_servicio'] . '<br/>';
    echo 'Descripción: ' . $result_servicios[$i]['pm_descrition_servicio'] . ' | Precio: ' . $result_servicios[$i]['pm_precio'] . '<br/>';
    echo 'Moneda: ' . $result_servicios[$i]['pm_moneda'] . ' | Dimensiones: ' . $result_servicios[$i]['pm_dimensiones'] . '<br/>';
} */

/* Start pagination_servicios - Next and Previous */

/* if ($page_servicios == 1) {
    echo ' <p class="pagination_servicios"> <a href="">« Previous</a> ';
} else {
    $prev = $page_servicios - 1;
    echo ' <p class="pagination_servicios"> <a href="?page_servicios=' . $prev . '">« Previous</a> ';
}

for ($i = 1; $i <= $page_servicioss; $i++) {
    if ($i == $page_servicios) {
        echo '<p class="pagination_servicios"> ' .  $i . ' </p> ';
    } else {
        echo ' <p class="pagination_servicios"> <a href="?page_servicios=' . $i . '">' . $i . '</a> ';
    }
}

if ($page_servicios == $page_servicioss) {
    echo ' <p class="pagination_servicios"> <a href="">Next »</a> </p> ';
} else {
    $next = $page_servicios + 1;
    echo ' <p class="pagination_servicios"> <a href="?page_servicios=' . $next . '">Next »</a> </p> ';
} */

?>